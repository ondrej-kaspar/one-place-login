<?php
require_once ('includes/templates.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= renderHead(['title' => 'Error']); ?></head>
<body class="bg-[#f5f6fa]">

<div class="bg-white px-4 py-3">
  <div>
    <img src="/dist/img/arnold-logo.svg" alt="ARNOLD" width="208" height="52" class="max-sm:w-[160px] max-sm:mx-auto">
  </div>
</div>
<div class="px-4 py-10 sm:py-26">
  <div class="grid gap-6 max-w-[568px] px-6 py-8 sm:p-16 mx-auto bg-white">
    
    <div class="size-20 flex items-center justify-center mx-auto mb-2 bg-background-basic-default rounded-full">
      <img src="/dist/img/lock.svg" alt="" width="64" height="64">
    </div>
    <h2 class="heading-md text-center">Toto není stránka, kterou hledáte</h2>
    <div class="text-text-secondary text-center">
      <p>Nastala neočekávaná chyba. Zkuste stránku načíst znovu – pokud problém přetrvává, kontaktujte podporu.</p>
    </div>
    <div>
      <a href="#" class="btn btn--primary w-full">Zpět na přihlášení</a>
    </div>
    
  </div>  
</div>

</body>
</html>