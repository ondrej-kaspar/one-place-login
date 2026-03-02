<?php
require_once ('../includes/head.php');
require_once ('../includes/icon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= renderHead(['title' => 'Typography | UI Library']); ?>
</head>
<body>

<div class="container py-12">
  <p class="mb-4">
    <a href="../" class="inline-flex gap-2 items-center text-sm leading-none">
      <svg class="icon text-base" width="16" height="16" aria-hidden="true"><use xlink:href="/dist/img/icons.svg#chevron-left"></use></svg>
      Back
    </a>
  </p>
  
  <h1 class="display-lg mb-10">Typography</h1>
  
  <div class="grid grid-cols-2 gap-x-8">
    <div>
      <h1 class="display-lg">Display Large</h1>
      <h2 class="heading-xl">Heading Extra Large</h2>
      <h3 class="heading-lg">Heading Large</h3>
      <h4 class="heading-md">Heading Medium</h4>
      <h5 class="heading-sm">Heading Small</h5>
      <br>
      <p class="body-xl">Body Extra Large</p>
      <p class="body-lg">Body Large</p>
      <p class="body-md">Body Medium</p>
      <p class="body-sm">Body Small</p>
      <br>
    </div>
  </div>
  
</div>

</body>
</html>