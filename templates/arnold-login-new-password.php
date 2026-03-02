<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'New password']); ?></head>
<body>

<div class="login">
  <div class="login__header">
    <div class="flex items-center max-md:justify-center gap-4 md:gap-6">
      <a href="index.php" class="shrink-0"><img src="/dist/img/arnold-logo-bubble.svg" alt="" class="w-10 md:w-14 lg:w-18"></a>
      <h1 class="display-lg">Přihlas se do&nbsp;Arnolda</h1>
    </div>
    <div class="mt-auto p-3 max-md:hidden">
      <img src="/dist/img/arnold-logo-white.svg" alt="" width="160" class="">
    </div>
  </div>
  <div class="login__body">
    <div class="grid gap-6 max-w-[440px] mx-auto">
      <div class="size-20 flex items-center justify-center mx-auto mb-2">
        <img src="/dist/img/lock.svg" alt="" width="64" height="64">
      </div>
      <h2 class="heading-md text-center">Napiš nové heslo</h2>
      <p class="text-text-secondary text-center">Na email <strong>michal.klimt@almamedia.com</strong> jsme ti odeslali odkaz, přes který si nastavíš nové heslo. Pokud email nepřišel, můžeš si ho poslat znovu za <strong>10 vteřin</strong>.</p>
      <div>
        <button type="submit" class="btn btn--secondary-text w-full">Odeslat email znovu</button>
      </div>
    </div>
    
    <details class="dropdown absolute right-6 top-4">
      <summary class="dropdown__toggle">
        <img src="https://borderly.dev/flag/circle/cz.svg" alt="Czech" width="20" height="20">
        <span class="dropdown__toggle-indicator">
            <?= icon('chevron-down', ['class' => 'text-[1.25rem]']); ?>
          </span>
      </summary>
      <div class="dropdown__body dropdown__body--left">
        <ul class="option-list">
          <li class="option-list__item">
            <a href="#">
              <img src="https://borderly.dev/flag/circle/gb.svg" alt="English" width="20" height="20">
              English
            </a>
          </li>
          <li class="option-list__item">
            <a href="#">
              <img src="https://borderly.dev/flag/circle/sk.svg" alt="Slovak" width="20" height="20">
              Slovak
            </a>
          </li>
        </ul>
      </div>
    </details>
  </div>
</div>

</body>
</html>