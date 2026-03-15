<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'Link sent']); ?></head>
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
    <div class="login__body-content">
      <div class="size-20 flex items-center justify-center mx-auto mb-2 bg-background-basic-default rounded-full">
        <img src="/dist/img/mail.svg" alt="" width="64" height="64">
      </div>
      <h2 class="heading-md text-center">Odeslání odkazu</h2>
      <div class="grid gap-4">
        <p class="text-text-secondary text-center body-md">Na zadaný email jsme ti odeslali přihlašovací odkaz. Pokud nepřišel, můžete si ho poslat znovu za <strong>10 vteřin</strong>.</p>
        <div>
          <button type="submit" class="btn btn--secondary-text w-full">Odeslat email znovu</button>
        </div>
      </div>
    </div>
    
    <details class="dropdown language-select">
      <summary class="dropdown__toggle">
        <img src="/dist/img/flag-cs.svg" alt="Czech" width="22" height="22">
        <span class="dropdown__toggle-indicator">
            <?= icon('chevron-down', ['class' => 'text-[1rem]']); ?>
          </span>
      </summary>
      <div class="dropdown__body dropdown__body--left">
        <ul class="option-list">
          <li class="option-list__item">
            <a href="#">
              <img src="/dist/img/flag-gb.svg" alt="English" width="22" height="22">
              anglicky
            </a>
          </li>
          <li class="option-list__item option-list__item--disabled">
            <a href="#">
              <img src="/dist/img/flag-cs.svg" alt="Czech" width="22" height="22">
              česky
            </a>
          </li>
          <li class="option-list__item">
            <a href="#">
              <img src="/dist/img/flag-sk.svg" alt="Slovak" width="22" height="22">
              slovensky
            </a>
          </li>
        </ul>
      </div>
    </details>
  </div>
</div>

</body>
</html>