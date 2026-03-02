<?php
require_once ('../includes/head.php');
require_once ('../includes/icon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= renderHead(['title' => 'Buttons | UI Library']); ?>
</head>
<body>

<div class="container py-12">
  <p class="mb-4">
    <a href="../" class="inline-flex gap-2 items-center text-sm leading-none">
      <svg class="icon text-base" width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#chevron-left"></use></svg>
      Back
    </a>
  </p>
  
  <h1 class="display-lg mb-6">Buttons</h1>
  
  <h2 class="heading-md mb-4">Button Default</h2>
  <p class="flex flex-wrap items-center gap-8">
    <button type="button" class="btn">
      <span class="icon icon--left">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-left"></use></svg>
      </span>
      Button BUTTON
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" disabled class="btn">
      Button BUTTON disabled
    </button>
    <a href="#" class="btn">
      Button A
    </a>
    <a href="#" class="btn btn--disabled">
      Button A disabled
    </a>
  </p>
  <br>
  
  <h2 class="heading-md mb-4">Button Primary</h2>
  <p class="flex flex-wrap items-center gap-8">
    <button type="button" class="btn btn--primary">
      <span class="icon icon--left">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-left"></use></svg>
      </span>
      Button BUTTON
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" disabled class="btn btn--primary">
      Button BUTTON disabled
    </button>
    <a href="#" class="btn btn--primary">
      Button A
    </a>
    <a href="#" class="btn btn--primary btn--disabled">
      Button A disabled
    </a>
  </p>
  <br>
  
  <h2 class="heading-md mb-4">Button Secondary</h2>
  <p class="flex flex-wrap items-center gap-8">
    <button type="button" class="btn btn--secondary">
      <span class="icon icon--left">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-left"></use></svg>
      </span>
      Button BUTTON
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" disabled class="btn btn--secondary">
      Button BUTTON disabled
    </button>
    <a href="#" class="btn btn--secondary">
      Button A
    </a>
    <a href="#" class="btn btn--secondary btn--disabled">
      Button A disabled
    </a>
  </p>
  <br>
  
  <h2 class="heading-md mb-4">Button Secondary Text</h2>
  <p class="flex flex-wrap items-center gap-8">
    <button type="button" class="btn btn--secondary-text">
      <span class="icon icon--left">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-left"></use></svg>
      </span>
      Button BUTTON
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" disabled class="btn btn--secondary-text">
      Button BUTTON disabled
    </button>
    <a href="#" class="btn btn--secondary-text">
      Button A
    </a>
    <a href="#" class="btn btn--secondary-text btn--disabled">
      Button A disabled
    </a>
  </p>
  <br>
  
  <!--
  <h2 class="h4 mb-4">Button Sizes</h2>
  <p class="flex flex-wrap items-center gap-8">
    <button type="button" class="btn btn--primary btn--xl">
      Extra Large Button
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" class="btn btn--primary btn--lg">
      Large Button
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" class="btn btn--primary">
      Default Button
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" class="btn btn--primary btn--sm">
      Small Button
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
    <button type="button" class="btn btn--primary btn--xs">
      Extra Small Button
      <span class="icon icon--right">
        <svg width="16" height="16" aria-hidden="true"><use xlink:href="../../dist/img/icons.svg#arrow-right"></use></svg>
      </span>
    </button>
  </p>
  <br>
  -->
</div>

</body>
</html>