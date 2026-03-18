<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'Login using password']); ?></head>
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
        <img src="/dist/img/lock.svg" alt="" width="64" height="64">
      </div>
      <h2 class="heading-md text-center">Přihlášení pomocí hesla</h2>
      <div class="grid gap-4">
        <div class="form-group">
          <label for="login" class="form-label">E-mail</label>
          <div class="form-control-wrapper">
            <input type="text" class="form-control pr-18" id="login" value="michal.klimt@almacareer.com" disabled>
            <a href="#" class="form-control-action body-sm mr-4">Change</a>
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="form-label">Heslo</label>
          <div class="form-control-wrapper">
            <input type="password" class="form-control" id="password">
            <button type="button" class="form-control-action" data-reveal="off">
                <?= icon('visibility-on', ['class' => 'on']); ?>
                <?= icon('visibility-off', ['class' => 'off']); ?>
            </button>
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn--primary w-full">Potvrdit heslo</button>
        </div>
        <div>
          <a href="#" class="btn btn--secondary-text w-full">Nastavit nové heslo</a>
        </div>
        <div class="pt-12 text-center body-sm">
          <p class="mb-2">Ještě nemáte účet? <a href="#" class="link-primary">Zaregistrujte se</a></p>
          <p><a href="#" class="link-primary">Nastavení cookies</a></p>
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