<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'Create account']); ?></head>
<body>

<div class="login">
  <div class="login__header">
    <div class="flex items-center max-md:justify-center gap-4 md:gap-6 md:flex-col md:items-start">
      <a href="index.php" class="shrink-0"><img src="/dist/img/arnold-logo-bubble.svg" alt="" class="w-10 md:w-14 lg:w-18"></a>
      <h1 class="display-lg">Vyzkoušejte si Arnolda zdarma</h1>
    </div>
    <div class="body-sm max-md:hidden">
      <p class="mb-3">Vedu se zaměstnanci pravidelný dialog formou krátkých a interaktivních konverzací.</p>
      <p>Jednoduše vyplňte formulář a nastavte si pro sebe a pro vaše týmy témata konverzací. Můžete si vybrat hned z několika témat a po ukončení interakce se zaměstnancem obdržíte report s vyhodnocením.</p>
      <div class="mt-6 flex gap-2 flex-wrap body-sm">
        <p>Potřebujete vědět víc?</p>
        <p><a href="#" class="link-primary-inverted">Podívejte se na Arnoldův web</a></p>
      </div>
    </div>
    <div class="mt-auto p-3 max-md:hidden">
      <img src="/dist/img/arnold-logo-white.svg" alt="" width="160" class="">
    </div>
  </div>
  <div class="login__body">
    <div class="grid gap-6 max-w-[440px] mx-auto">
      <div class="size-20 flex items-center justify-center mx-auto mb-2 bg-background-basic-default rounded-full">
        <img src="/dist/img/add-account.svg" alt="" width="64" height="64">
      </div>
      <h2 class="heading-md text-center">Vytvořit účet</h2>
      <div class="grid gap-6">
        <div class="form-group">
          <label for="company" class="form-label">Společnost</label>
          <input type="text" class="form-control" id="company" required>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="form-group">
            <label for="jmeno" class="form-label">Křestní jméno</label>
            <input type="text" class="form-control" id="jmeno" required>
          </div>
          <div class="form-group">
            <label for="prijmeni" class="form-label">Příjmení</label>
            <input type="text" class="form-control" id="prijmeni" required>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Pracovní e-mail (Arnold ID)</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="form-group">
            <label for="predvolba" class="form-label">Předvolba</label>
            <input type="tel" class="form-control" id="predvolba" required>
          </div>
          <div class="form-group">
            <label for="telefon" class="form-label">Telefon</label>
            <input type="tel" class="form-control" id="telefon" required>
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
          <p class="form-message">Zadejte heslo obsahující alespoň 8 znaků v kombinaci číslic a písmen. Nepoužívejte předvídatelné kombinace jako 12345678 nebo hesla z jiných webů.</p>
        </div>
        <div>
          <div class="form-check mb-3">
            <input type="checkbox" name="checkbox" class="form-check__control" id="terms">
            <label for="terms" class="form-check__label">Souhlasím s <a href="#" class="link-primary">obchodními podmínkami</a></label>
          </div>
          <div class="form-check">
            <input type="checkbox" name="checkbox" class="form-check__control" id="spam">
            <label for="spam" class="form-check__label">Nepřeji si dostávat informace o novinkách a změnách, které mě můžou zajímat.</label>
          </div>
        </div>
        <div>
          <button type="submit" class="btn btn--primary w-full">Vytvořit účet</button>
        </div>
        <div class="pt-12 text-center body-sm">
          <p class="mb-2">Už máte účet? <a href="#" class="link-primary">Přihlaste se</a></p>
          <p><a href="#" class="link-primary">Nastavení cookies</a></p>
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