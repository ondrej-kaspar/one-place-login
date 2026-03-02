<?php

function renderHead($props = [])
{
    $title = $props['title'] ?? '';
    
    $version = '?' . time();
    
    return <<<HTML
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <link href="/dist/css/main.css{$version}" rel="stylesheet">
  
  <script src="/dist/js/main.js{$version}"></script>
  
  <title>{$title} | One Place Login - Arnold</title>

HTML;
}
