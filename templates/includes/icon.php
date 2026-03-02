<?php

function icon($name, $props = [])
{
    $class = $props['class'] ?? '';
    $title = $props['title'] ?? '';
    
    $ariaLabel = $title ? ' aria-label="' . $title . '"' : '';

    $svg = file_get_contents(realpath($_SERVER["DOCUMENT_ROOT"] . '/dist/icons/') . '/' . $name . '.svg');
    
    return <<<HTML
<span class="icon {$class}"{$ariaLabel}>{$svg}</span>
HTML;
}

?>