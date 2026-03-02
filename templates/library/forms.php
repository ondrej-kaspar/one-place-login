<?php
require_once ('../includes/head.php');
require_once ('../includes/icon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= renderHead(['title' => 'Forms | UI Library']); ?>
</head>
<body>

<div class="container py-12">
  <p class="mb-4">
    <a href="../" class="inline-flex gap-2 items-center text-sm leading-none">
      <svg class="icon text-base" width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#chevron-left"></use></svg>
      Back
    </a>
  </p>
  
  <h1 class="display-lg mb-6">Forms</h1>
  
  <div class="max-w-[600px]">
    <h2 class="heading-md mb-4">Text Field</h2>
    <div class="form-group mb-4">
      <label for="text-input" class="form-label">Label</label>
      <input type="text" class="form-control" id="text-input" placeholder="Insert text here...">
    </div>
    <div class="form-group form-group--error mb-4">
      <label for="text-input" class="form-label">Input with error</label>
      <input type="text" class="form-control" id="text-input" placeholder="Insert text here...">
      <p class="form-message">Incorrect username or password.</p>
    </div>
    <div class="form-group mb-4">
      <label for="text-input-disabled" class="form-label">Label DISABLED</label>
      <input type="text" class="form-control" id="text-input-disabled" disabled>
    </div>
    <div class="form-group mb-4">
      <label for="textarea" class="form-label">Label Textarea</label>
      <textarea class="form-control" id="textarea"></textarea>
    </div>
    
    <h2 class="heading-md mt-8 mb-4">Select</h2>
    <div class="form-group mb-4">
      <label for="select" class="form-label">Label Select</label>
      <select id="select" class="form-control">
        <option value="">Option</option>
      </select>
    </div>
    
    <h2 class="heading-md mt-8 mb-4">Checkbox & Radio</h2>
    <div class="grid grid-cols-2 gap-8">
      <div>
        <div class="form-check mb-4">
          <input type="checkbox" name="checkbox" class="form-check__control" id="form-check-a">
          <label for="form-check-a" class="form-check__label">Checkbox A</label>
        </div>
        <div class="form-check mb-4">
          <input type="checkbox" name="checkbox" class="form-check__control" id="form-check-b">
          <label for="form-check-b" class="form-check__label">Checkbox B</label>
        </div>
        <div class="form-check mb-4">
          <input type="checkbox" class="form-check__control" id="form-check-disabled" disabled>
          <label for="form-check-disabled" class="form-check__label">Checkbox DISABLED</label>
        </div>
      </div>
      <div>
        <div class="form-radio mb-4">
          <input type="radio" name="radio" class="form-radio__control" id="form-radio-a">
          <label for="form-radio-a" class="form-radio__label">Radio A</label>
        </div>
        <div class="form-radio mb-4">
          <input type="radio" name="radio" class="form-radio__control" id="form-radio-b">
          <label for="form-radio-b" class="form-radio__label">Radio B</label>
        </div>
        <div class="form-radio mb-4">
          <input type="radio" class="form-radio__control" id="form-radio-disabled" disabled>
          <label for="form-radio-disabled" class="form-check__label">Radio DISABLED</label>
        </div>
      </div>
    </div>
  </div>

</div>

</body>
</html>