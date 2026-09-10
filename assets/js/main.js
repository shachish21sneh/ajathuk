/**
 * Ajath Infotech - Main Application Logic
 */

document.addEventListener('DOMContentLoaded', () => {
  initStickyHeader();
  initMobileNav();
  initPortfolioFilters();
  initEnquiryForms();
  initModals();
});

// -----------------------------------------------------------------------------
// 1. Sticky Header Blur on Scroll
// -----------------------------------------------------------------------------
function initStickyHeader() {
  const header = document.querySelector('.site-header');
  if (!header) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 30) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });
}

// -----------------------------------------------------------------------------
// 2. Mobile Navigation Drawer
// -----------------------------------------------------------------------------
function initMobileNav() {
  const toggleBtn = document.querySelector('.nav-mobile-toggle');
  const drawer = document.querySelector('.mobile-nav-drawer');
  const backdrop = document.querySelector('.drawer-backdrop');
  const closeBtn = document.querySelector('.drawer-close-btn');
  const navLinks = document.querySelectorAll('.drawer-nav-list a');

  if (!toggleBtn || !drawer || !backdrop) return;

  function openMenu() {
    drawer.classList.add('open');
    backdrop.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    drawer.classList.remove('open');
    backdrop.classList.remove('open');
    document.body.style.overflow = '';
  }

  toggleBtn.addEventListener('click', openMenu);
  backdrop.addEventListener('click', closeMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);

  navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });
}

// -----------------------------------------------------------------------------
// 3. Portfolio Category Filtering
// -----------------------------------------------------------------------------
function initPortfolioFilters() {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.portfolio-grid .project-card');

  if (!filterBtns.length || !projectCards.length) return;

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.getAttribute('data-filter');

      projectCards.forEach(card => {
        const cat = card.getAttribute('data-category');
        if (filter === 'all' || cat === filter) {
          card.style.display = 'flex';
          card.style.opacity = '0';
          setTimeout(() => {
            card.style.transition = 'opacity 0.3s ease';
            card.style.opacity = '1';
          }, 10);
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

// -----------------------------------------------------------------------------
// 4. Enquiry Form Submissions (AJAX to /api/enquiry)
// -----------------------------------------------------------------------------
function initEnquiryForms() {
  const forms = document.querySelectorAll('form[data-enquiry-form]');

  forms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const statusEl = form.querySelector('.form-status');
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : 'Submit';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
          <svg class="btn-icon" style="animation: spin 1s linear infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10" stroke-dasharray="32" stroke-linecap="round"></circle>
          </svg>
          Processing...
        `;
      }

      if (statusEl) {
        statusEl.className = 'form-status';
        statusEl.textContent = '';
      }

      const formData = new FormData(form);

      try {
        const response = await fetch('/api/enquiry', {
          method: 'POST',
          body: formData
        });

        const data = await response.json();

        if (response.ok && data.success) {
          if (statusEl) {
            statusEl.className = 'form-status success';
            statusEl.textContent = data.message;
          }
          form.reset();
          showToast(data.message, 'success');

          // Close modal if form is inside modal
          const modalBackdrop = form.closest('.modal-backdrop');
          if (modalBackdrop) {
            setTimeout(() => {
              modalBackdrop.classList.remove('open');
              document.body.style.overflow = '';
            }, 2500);
          }
        } else {
          const errMsg = data.message || (data.errors ? Object.values(data.errors).join(' ') : 'An error occurred.');
          if (statusEl) {
            statusEl.className = 'form-status error';
            statusEl.textContent = errMsg;
          }
          showToast(errMsg, 'error');
        }
      } catch (err) {
        const errMsg = 'Network error. Please try again or email info@ajath.uk.';
        if (statusEl) {
          statusEl.className = 'form-status error';
          statusEl.textContent = errMsg;
        }
        showToast(errMsg, 'error');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
        }
      }
    });
  });
}

// -----------------------------------------------------------------------------
// 5. Modal Controllers (Consultation & Project Details)
// -----------------------------------------------------------------------------
function initModals() {
  const triggers = document.querySelectorAll('[data-open-modal]');
  const closeButtons = document.querySelectorAll('.modal-close-btn, [data-close-modal]');

  triggers.forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      const modalId = trigger.getAttribute('data-open-modal');
      const targetModal = document.getElementById(modalId);
      if (targetModal) {
        targetModal.classList.add('open');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  closeButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const modal = btn.closest('.modal-backdrop');
      if (modal) {
        modal.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  });

  // Close on outside click
  document.querySelectorAll('.modal-backdrop').forEach(modal => {
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  });

  // Project details trigger
  const projectBtns = document.querySelectorAll('[data-project-details]');
  const projectModal = document.getElementById('project-detail-modal');
  if (projectBtns.length && projectModal) {
    projectBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const title = btn.getAttribute('data-title');
        const desc = btn.getAttribute('data-desc');
        const tags = btn.getAttribute('data-tags');
        const metrics = btn.getAttribute('data-metrics');
        const client = btn.getAttribute('data-client');

        document.getElementById('modal-project-title').textContent = title;
        document.getElementById('modal-project-client').textContent = client;
        document.getElementById('modal-project-desc').textContent = desc;
        document.getElementById('modal-project-metrics').textContent = metrics;

        const tagContainer = document.getElementById('modal-project-tags');
        if (tagContainer && tags) {
          tagContainer.innerHTML = tags.split(',').map(t => `<span class="p-tag">${t.trim()}</span>`).join('');
        }

        projectModal.classList.add('open');
        document.body.style.overflow = 'hidden';
      });
    });
  }
}

// -----------------------------------------------------------------------------
// 6. Toast Notification Helper
// -----------------------------------------------------------------------------
function showToast(message, type = 'success') {
  let container = document.querySelector('.toast-container');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = `toast ${type}`;
  toast.innerHTML = `
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      ${type === 'success' 
        ? '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>' 
        : '<circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line>'}
    </svg>
    <span>${message}</span>
  `;

  container.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transition = 'opacity 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 4000);
}
