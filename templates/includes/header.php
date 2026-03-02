<?php

function renderHeader($props = [])
{
    $class = $props['class'] ?? '';
    
    return <<<HTML
<header class="header {$class}">
  <div class="header__container container">
    <div class="header__brand">
      <a href="/templates/">
        <img src="/dist/img/logo-demandbase-white.svg" alt="DEMANDBASE">
      </a>
    </div>
    <nav class="nav">
      <div class="nav__container">
        <ul class="nav__menu">
          <li class="nav__menu-item">
            <a href="/templates/homepage.php#personas" class="nav__menu-item__container">
              Platform
            </a>
          </li>
          <li class="nav__menu-item">
            <a href="/templates/homepage.php#how-it-works" class="nav__menu-item__container">
              How it works
            </a>
          </li>
          <li class="nav__menu-item">
            <a href="/templates/homepage.php#results" class="nav__menu-item__container">
              Results
            </a>
          </li>
        </ul>
      </div>
      
      <button type="button" class="nav-toggle nav-toggle-close btn btn--primary btn--circle">
        <svg class="icon" width="16" height="16" aria-hidden="true"><use xlink:href="/dist/img/icons.svg#close"></use></svg>
        <span class="sr-only">Close navigation</span>
      </button>
    </nav>
    
    <ul class="header__actions">
      <li>
        <a href="/templates/homepage.php#get-started" class="btn btn--secondary">
          Get Started
          <svg class="icon icon--right" width="16" height="16" aria-hidden="true"><use xlink:href="/dist/img/icons.svg#arrow-right"></use></svg>
        </a>
      </li>
      <li>
        <button type="button" class="nav-toggle btn btn--primary btn--circle">
          <svg class="icon" width="16" height="16" aria-hidden="true"><use xlink:href="/dist/img/icons.svg#menu"></use></svg>
          <span class="sr-only">Open navigation</span>
        </button>
      </li>
    </ul>
  </div>
</header>

<hr class="hidden">
HTML;
}
