<?php

function renderFooter($props = [])
{
    $class = $props['class'] ?? '';
    
    $iconLinkedin = icon('linkedin', ['title' => 'LinkedIn', 'class' => 'text-lg']);
    $iconX = icon('x', ['title' => 'X', 'class' => 'text-lg']);
    $iconFacebook = icon('facebook', ['title' => 'Facebook', 'class' => 'text-lg']);

    $iconSearch = icon('search');
    $iconArrowRight = icon('arrow-right');

return <<<HTML
<footer class="footer pt-14 pb-14 {$class}">
    <div class="container">
      <div class="flex flex-col gap-6 items-center sm:flex-row sm:items-center sm:justify-between">
        <div class="">
          <img src="/dist/img/logo-demandbase-white.svg" alt="DEMANDBASE" class="h-[20px] opacity-70">
        </div>
    
        <ul class="flex gap-3">
          <li><a href="#" class="btn btn--primary btn--circle">{$iconLinkedin}</a></li>
          <li><a href="#" class="btn btn--primary btn--circle">{$iconX}</a></li>
          <li><a href="#" class="btn btn--primary btn--circle">{$iconFacebook}</a></li>
        </ul>
      </div>
      
      <div class="flex flex-col gap-6 items-center sm:flex-row sm:items-center sm:justify-between mt-10 text-neutral-300 text-xs [&_a]:hover:text-white">
        <p>
          <a href="#" class="">Privacy Notice</a>
        </p>
        <p>
          <span>Copyright © 2025 <a href="https://www.demandbase.com/">Demandbase</a></span>
        </p>
      </div>
    </div>
</footer>
HTML;
}
