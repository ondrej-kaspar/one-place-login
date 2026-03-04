<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'SSO Login - email']); ?></head>
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
        <img src="/dist/img/mail.svg" alt="" width="64" height="64">
      </div>
      <div>
        <h2 class="heading-md text-center">Jak se chceš přihlásit?</h2>
        <p class="mt-2 text-text-secondary text-center">Tvá organizace podporuje SSO přihlášení.</p>
      </div>
      <div class="grid gap-4">
        <div class="form-group">
          <label for="login" class="form-label">E-mail</label>
          <input type="text" class="form-control" id="login" value="jan.fuxa@almamedia.com" disabled>
        </div>
        <div>
          <button type="submit" class="btn btn--primary w-full">Pokračovat přes SSO</button>
        </div>
        <!-- tohle neni konzistentni s arnold-login.php; tam cara kolem "Nebo" neni -->
        <p class="text-text-secondary body-sm text-divider">Nebo</p>
        <div>
          <button type="submit" class="btn btn--secondary w-full">Pokračovat heslem</button>
        </div>
      </div>
    </div>
    
    <div class="absolute left-6 top-4">
      <a href="arnold-sso-login.php" class="btn btn--secondary-text px-2">
        <?= icon('chevron-left'); ?>
        Zpět
      </a>
    </div>
    
    <details class="dropdown absolute right-6 top-4">
      <summary class="dropdown__toggle p-[9px]">
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