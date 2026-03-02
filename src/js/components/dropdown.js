export const Dropdown = () => {
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