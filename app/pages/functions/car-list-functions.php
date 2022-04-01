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
    global $mysqli;
    $result = [];

    $q = 'SELECT cars.id, cars.title, cars.price, brands.label as brand_name
            FROM cars 
            JOIN brands ON barsnd.id = cars.brand_id';

    $q_result = mysqli_query($mysqli, $q);

    if($q_result) {
        while ( $car = mysqli_fetch_assoc($q_result)) {
            $result[] = $car;
        }
    }

    return $result;
}