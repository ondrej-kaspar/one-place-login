<?php

function renderCard($props = [])
{
    $type = $props['type'] ?? '';
    $class = $props['class'] ?? '';
    $borderClass = isset($props['border']) && $props['border'] === true ? 'card--bordered' : '';
    $tag = $props['tag'] ?? '';
    $title = $props['title'] ?? 'Title';
    $text = $props['text'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla.';
    $img = $props['img'] ?? 'placeholder-2-640x360.jpg';
    $action = $props['action'] ?? '<a href="#" class="btn btn--text">
          Learn more
          ' . icon('arrow_forward') . '
        </a>';

    $tagHtml = empty($tag) ? '' : "<div>
        <a href=\"#{$tag}\" class=\"tag tag--{$tag}\">{$tag}</a>
      </div>";
    
    if ($type === 'alliance') {
        return <<<HTML
  <div class="card {$borderClass} {$class}">
    <div class="card__media media">
      <img src="/dist/img/{$img}" alt="">
      <div class="card__media-overlay">
        <img src="/dist/img/logo-marketingprofs.png" alt="">
      </div>
    </div>
    <div class="card__body">
      {$tagHtml}
      <div class="wysiwyg">
        <h3 class="card__title h4"><a href="#" class="link-stretched">{$title}</a></h3>
        <p class="card__text font-bold">{$text}</p>
      </div>
      <div class="card__action">
        {$action}
      </div>
    </div>
  </div>
HTML;
    }

    if ($type === 'member') {
        return <<<HTML
  <div class="card {$borderClass} {$class}">
    <div class="card__media media">
      <a href="#"><img src="/dist/img/{$img}" alt=""></a>
    </div>
    <div class="card__body">
      {$tagHtml}
      <div class="wysiwyg">
        <h3 class="card__title h4"><a href="#" class="link-stretched">{$title}</a></h3>
        <p class="card__text font-bold">{$text}</p>
      </div>
      <div class="card__action">
        {$action}
      </div>
      <div class="card__footer">
        <img src="/dist/img/logo-marketingprofs.png" alt="">
      </div>
    </div>
  </div>
HTML;
    }

    return <<<HTML
  <div class="card {$borderClass} {$class}">
    <div class="card__media media">
      <img src="/dist/img/{$img}" alt="">
    </div>
    <div class="card__body">
      {$tagHtml}
      <div class="wysiwyg">
        <h3 class="card__title h4"><a href="#" class="link-stretched">{$title}</a></h3>
        <p class="card__text">{$text}</p>
      </div>
      <div class="card__action">
        {$action}
      </div>
    </div>
  </div>
HTML;
}
