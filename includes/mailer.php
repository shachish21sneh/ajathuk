<?php
/**
 * Ajath Infotech - Direct SMTP Mailer
 * Zero external dependencies. Uses SSL stream socket connection to mail.ajath.uk:465.
 */

require_once __DIR__ . '/config.php';

function send_enquiry_email(array $data): bool {
    $recipients = ENQUIRY_RECIPIENTS;
    $subject = "New Project Enquiry: " . ($data['fullName'] ?? 'Client') . " - " . ($data['service'] ?? 'General');
    
    // Construct HTML Email Body
    $html = '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background-color: #06090e; color: #f1f5f9; padding: 24px; margin: 0; }
  .email-container { max-width: 600px; margin: 0 auto; background: #0d1420; border: 1px solid rgba(0, 240, 255, 0.3); border-radius: 16px; overflow: hidden; }
  .email-header { background: linear-gradient(135deg, #00f0ff, #3b82f6, #8b5cf6); padding: 26px 24px; text-align: center; color: #06090e; }
  .email-header h2 { margin: 0; font-size: 24px; font-weight: 800; }
  .email-body { padding: 30px 24px; }
  .detail-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
  .detail-table td { padding: 12px 14px; border-bottom: 1px solid rgba(255, 255, 255, 0.08); font-size: 15px; }
  .detail-label { font-weight: 700; color: #00f0ff; width: 140px; }
  .detail-val { color: #f1f5f9; }
  .message-box { background: rgba(255, 255, 255, 0.04); border-left: 3px solid #00f0ff; padding: 16px; border-radius: 8px; margin-top: 10px; color: #cbd5e1; line-height: 1.6; white-space: pre-wrap; }
  .email-footer { background: #070a10; padding: 18px 24px; text-align: center; font-size: 13px; color: #64748b; border-top: 1px solid rgba(255, 255, 255, 0.08); }
</style>
</head>
<body>
  <div class="email-container">
    <div class="email-header">
      <h2>Ajath Infotech</h2>
      <p style="margin: 6px 0 0 0; font-weight: 700; font-size: 14px;">New Website Lead Notification</p>
    </div>
    <div class="email-body">
      <table class="detail-table">
        <tr>
          <td class="detail-label">Full Name:</td>
          <td class="detail-val"><strong>' . htmlspecialchars($data['fullName'] ?? 'N/A') . '</strong></td>
        </tr>
        <tr>
          <td class="detail-label">Company:</td>
          <td class="detail-val">' . htmlspecialchars(!empty($data['companyName']) ? $data['companyName'] : 'Not specified') . '</td>
        </tr>
        <tr>
          <td class="detail-label">Email Address:</td>
          <td class="detail-val"><a href="mailto:' . htmlspecialchars($data['email'] ?? '') . '" style="color: #00f0ff; font-weight: 700;">' . htmlspecialchars($data['email'] ?? 'N/A') . '</a></td>
        </tr>
        <tr>
          <td class="detail-label">Phone Number:</td>
          <td class="detail-val">' . (!empty($data['phone']) ? '<a href="tel:' . htmlspecialchars($data['phone']) . '" style="color: #cbd5e1; font-weight: 600;">' . htmlspecialchars($data['phone']) . '</a>' : 'Not specified') . '</td>
        </tr>
        <tr>
          <td class="detail-label">Service:</td>
          <td class="detail-val"><span style="background: rgba(0, 240, 255, 0.15); color: #00f0ff; padding: 4px 12px; border-radius: 99px; font-weight: 700; font-size: 13px; display:inline-block;">' . htmlspecialchars($data['service'] ?? 'General') . '</span></td>
        </tr>
        <tr>
          <td class="detail-label">Submitted At:</td>
          <td class="detail-val">' . date('d M Y, H:i:s T') . '</td>
        </tr>
        <tr>
          <td class="detail-label">Client IP:</td>
          <td class="detail-val">' . htmlspecialchars($_SERVER['REMOTE_ADDR'] ?? '127.0.0.1') . '</td>
        </tr>
      </table>

      <div style="font-weight: 700; color: #f1f5f9; font-size: 15px;">Project Brief / Message:</div>
      <div class="message-box">' . (!empty($data['message']) ? htmlspecialchars($data['message']) : 'No specific message provided.') . '</div>
    </div>
    <div class="email-footer">
      Sent automatically by Ajath Infotech Website System (https://ajath.uk)<br>
      Reply directly to this email to contact the prospective client.
    </div>
  </div>
</body>
</html>';

    // 1. Send via direct SMTP socket to mail.ajath.uk:465
    try {
        $sent = smtp_send_socket(
            SMTP_HOST,
            SMTP_PORT,
            SMTP_USER,
            SMTP_PASS,
            SMTP_FROM_EMAIL,
            SMTP_FROM_NAME,
            $recipients,
            $subject,
            $html,
            $data['email'] ?? ''
        );
        if ($sent) {
            return true;
        }
    } catch (Exception $e) {
        error_log("AjathMailer SMTP Error: " . $e->getMessage());
    }

    // 2. Fallback to PHP native mail() if socket fails
    $toStr = implode(', ', $recipients);
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM_EMAIL . ">\r\n";
    if (!empty($data['email'])) {
        $headers .= "Reply-To: " . $data['email'] . "\r\n";
    }
    return @mail($toStr, $subject, $html, $headers);
}

function smtp_send_socket($host, $port, $user, $pass, $fromEmail, $fromName, array $toEmails, $subject, $htmlBody, $replyToEmail = ''): bool {
    $context = stream_context_create([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ]);

    $fp = @stream_socket_client("$host:$port", $errno, $errstr, 12, STREAM_CLIENT_CONNECT, $context);
    if (!$fp) {
        throw new Exception("Cannot connect to SMTP server: $errstr ($errno)");
    }

    $read = function() use ($fp) {
        $res = '';
        while ($line = fgets($fp)) {
            $res .= $line;
            if (strlen($line) >= 4 && substr($line, 3, 1) === ' ') {
                break;
            }
        }
        return $res;
    };

    $send = function($cmd, $expectedCode = null) use ($fp, $read) {
        fputs($fp, $cmd . "\r\n");
        $resp = $read();
        if ($expectedCode !== null && substr($resp, 0, strlen($expectedCode)) !== $expectedCode) {
            throw new Exception("SMTP command failed [$cmd]: $resp");
        }
        return $resp;
    };

    // 1. Initial Banner
    $read();

    // 2. EHLO
    $send("EHLO localhost", "250");

    // 3. AUTH LOGIN
    $send("AUTH LOGIN", "334");
    $send(base64_encode($user), "334");
    $send(base64_encode($pass), "235");

    // 4. MAIL FROM
    $send("MAIL FROM: <$fromEmail>", "250");

    // 5. RCPT TO for each recipient
    foreach ($toEmails as $recipient) {
        $send("RCPT TO: <$recipient>", "250");
    }

    // 6. DATA
    $send("DATA", "354");

    // Build MIME message
    $headers = [];
    $headers[] = "Date: " . date('r');
    $headers[] = "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <$fromEmail>";
    $headers[] = "To: " . implode(', ', $toEmails);
    if (!empty($replyToEmail)) {
        $headers[] = "Reply-To: <$replyToEmail>";
    }
    $headers[] = "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=";
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-Type: text/html; charset=UTF-8";
    $headers[] = "Content-Transfer-Encoding: base64";

    $rawMessage = implode("\r\n", $headers) . "\r\n\r\n" . chunk_split(base64_encode($htmlBody)) . "\r\n.";

    $send($rawMessage, "250");

    // 7. QUIT
    $send("QUIT");
    fclose($fp);

    return true;
}
