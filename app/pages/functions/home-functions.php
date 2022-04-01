<!-- Equivalente ao Controller em MVC -->
<?php

function homeRender() {
    $html_title = 'Acueill';
    $page_greeting = 'Bonjour voyageur';
    require_once PATH_ROOT .'app'. DS .'pages'. DS . 'partials' . DS . 'header.html.php';
    require_once PATH_ROOT .'app'. DS .'pages'. DS . 'home.php';
    require_once PATH_ROOT .'app'. DS .'pages'. DS . 'partials' . DS . 'footer.html.php';
}