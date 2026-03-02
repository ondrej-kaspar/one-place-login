const Dropdown = () => {
  const dropdowns = document.querySelectorAll('.dropdown');

  if (!dropdowns.length) return;

  const closeAll = () => {
    dropdowns.forEach((dropdown) => {
      dropdown.removeAttribute('open');
    });
  };

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeAll();
    }
  });

  document.addEventListener('click', (e) => {
    dropdowns.forEach((dropdown) => {
      if (!dropdown.open) return;

      const body = dropdown.querySelector('.dropdown__body');
      if (!body) return;

      const clickedInsideBody = body.contains(e.target);
      const clickedSummary = dropdown.querySelector('summary')?.contains(e.target);

      if (!clickedInsideBody && !clickedSummary) {
        dropdown.removeAttribute('open');
      }
    });
  });
};

const Form = () => {
  // Reveal password
  (function() {
    const btns = document.querySelectorAll('.form-control-action[data-reveal]');
    btns.forEach(btn => {
      const input = btn.closest('.form-group').querySelector('.form-control');
      const revealed = () => input.type === 'text';
      btn.addEventListener('click', () => {
        input.type = revealed() ? 'password' : 'text';
        btn.dataset.reveal = revealed() ? 'on' : 'off';
      });
    });
  })();
};

function init() {
    Dropdown();
    Form();
    
    // Verify code
    (function() {
        const input = document.getElementById('code');
        const btn = document.getElementById('submit-btn');
        if (!input || !btn) return;
        
        input.addEventListener('input', () => btn.disabled = input.value === '');
    })();
    
}

document.addEventListener('DOMContentLoaded', init);
