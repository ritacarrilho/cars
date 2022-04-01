<!-- Equivalente ao Controller em MVC -->
<?php

function carListRender() {
    $html_title = 'Voitures';
    $arr_cars = carListDataGetAll();
    require_once PATH_ROOT .'app'. DS .'pages'. DS . 'partials' . DS . 'header.html.php';
    require_once PATH_ROOT .'app'. DS .'pages'. DS . 'car-list.php';
    require_once PATH_ROOT .'app'. DS .'pages'. DS . 'partials' . DS . 'footer.html.php';
}

function carListDataGetAll() {
    $result = [];

    return $result;
}