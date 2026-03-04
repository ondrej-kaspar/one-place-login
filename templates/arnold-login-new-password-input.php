<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'New password - input']); ?></head>
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
      <div class="grid gap-4">
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
      </div>
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