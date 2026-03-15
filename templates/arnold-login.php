<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'Login']); ?></head>
<body>

<div class="login">
  <div class="login__header">
    <div class="flex items-center gap-6 sm:flex-col sm:items-start">
      <a href="index.php" class="shrink-0"><img src="/dist/img/arnold-logo-bubble.svg" alt="" class="w-10 sm:w-20"></a>
      <div class="max-w-[300px] sm:mt-4">
        <h1 class="login__title">Přihlas se do Arnolda</h1>
      </div>
    </div>
    <div class="max-sm:hidden">
      <div class="wysiwyg">
        <p class="mb-6"><strong>Pro zobrazení dat je potřeba přihlášení</strong>, které lze dvěmi způsoby:</p>
        <ul>
          <li><strong>Pomocí hesla</strong> - klikněte na Přihlásit se a pokud nemáte heslo nastavené, klikněte na
            <strong>Nastavit nové heslo</strong></li>
          <li><strong>Pomocí ověřovacího odkazu</strong> - klikněte na Přihlásit se pomocí ověřovacího odkazu -
            následně přijde do emailu link, po jehož prokliknutí budete automaticky přihlášení
          </li>
        </ul>
      </div>
    </div>
    <div class="mt-auto pb-8 max-sm:hidden">
      <img src="/dist/img/arnold-logo-white.svg" alt="" width="228" class="">
    </div>
  </div>
  <div class="login__body">
    <div class="login__body-content">
      <div class="size-20 flex items-center justify-center mx-auto mb-2 bg-background-basic-default rounded-full">
        <img src="/dist/img/mail.svg" alt="" width="64" height="64">
      </div>
      <h2 class="heading-md text-center">Zadej tvůj e-mail</h2>
      <div class="grid gap-4">
        <div class="form-group mb-4">
          <label for="login" class="form-label">E-mail</label>
          <input type="text" class="form-control" id="login">
        </div>
        <div>
          <button type="submit" class="btn btn--primary w-full">Přihlášení</button>
        </div>
        <p class="text-text-secondary text-center body-sm">Nebo</p>
        <div>
          <button type="submit" class="btn btn--secondary w-full">Rychlé přihlášení e-mailem</button>
        </div>
        <p class="text-text-secondary text-center body-sm">Na zadaný e-mail odešleme jednorázový odkaz</p>
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