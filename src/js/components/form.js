export const Form = () => {
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