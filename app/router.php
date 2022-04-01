<!-- Equivalente ao Model em MVC -->
<?php
// démarrer le router et afficcher la page
function routerStart(): void 
{
    // Si REDIRECT_URL n'existe pas on met la valeur '/'
    $route = $_SERVER[ 'REDIRECT_URL' ] ?? '/'; // $route = $_SERVER[ 'REDIRECT_URL' ] : $_SERVER[ 'REDIRECT_URL' ] ? '/';

    switch( $route ) {
        // cases => chaque page du site
        case '/':
            require_once PATH_ROOT . 'app' . DS . 'pages' . DS . 'functions' . DS . 'home-functions.php';
            homeRender();
            break;

        case '/voitures':
            require_once PATH_ROOT . 'app' . DS . 'pages' . DS . 'functions' . DS . 'car-list-functions.php';
            carListRender();
            break;

        // default => erreur a afficher si la page n'existe pas
        default:
            http_response_code( 404 );
            echo '404 - Not Found - Are you drunk ?';
            break;
    }
}