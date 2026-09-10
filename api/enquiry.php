<?php
/**
 * Ajath Infotech - Enquiry Form Processing API
 * Validates, records to data/enquiries.json, dispatches SMTP email to shachisheh@gmail.com & manjot@ajath.com,
 * and handles redirection to /thank-you.
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/mailer.php';

// Read POST data (handles both FormData and JSON)
$input = $_POST;
if (empty($input)) {
    $raw = file_get_contents('php://input');
    $input = json_decode($raw, true) ?: [];
}

$fullName = trim($input['fullName'] ?? '');
$companyName = trim($input['companyName'] ?? '');
$email = trim($input['email'] ?? '');
$phone = trim($input['phone'] ?? '');
$service = trim($input['service'] ?? '');
$message = trim($input['message'] ?? '');

// Validation
$errors = [];
if (empty($fullName)) {
    $errors['fullName'] = 'Full Name is required.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'A valid email address is required.';
}
if (empty($service)) {
    $errors['service'] = 'Please select a service or interest area.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields accurately.',
        'errors' => $errors
    ]);
    exit;
}

// Store enquiry record in data/enquiries.json
$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0777, true);
}

$enquiriesFile = $dataDir . '/enquiries.json';
$existing = [];
if (file_exists($enquiriesFile)) {
    $json = file_get_contents($enquiriesFile);
    $existing = json_decode($json, true) ?: [];
}

$newEnquiry = [
    'id' => uniqid('enq_', true),
    'fullName' => htmlspecialchars($fullName),
    'companyName' => htmlspecialchars($companyName),
    'email' => htmlspecialchars($email),
    'phone' => htmlspecialchars($phone),
    'service' => htmlspecialchars($service),
    'message' => htmlspecialchars($message),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
    'created_at' => date('Y-m-d H:i:s'),
];

array_unshift($existing, $newEnquiry);
@file_put_contents($enquiriesFile, json_encode($existing, JSON_PRETTY_PRINT));

// Dispatch SMTP notification email to shachisheh@gmail.com and manjot@ajath.com
$emailSent = send_enquiry_email($newEnquiry);

echo json_encode([
    'success' => true,
    'message' => 'Thank you, ' . htmlspecialchars($fullName) . '! Your enquiry has been received. We will connect with you within 24 hours.',
    'emailSent' => $emailSent,
    'redirect' => '/thank-you',
    'enquiryId' => $newEnquiry['id']
]);
exit;
