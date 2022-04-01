<!-- Equivalente ao Model em MVC -->
<?php
// démarrer le router et afficcher la page
function routerStart(): void 
{
    // Si REDIRECT_URL n'existe pas on met la valeur '/'
    $route = $_SERVER[ 'REDIRECT_URL' ] ?? '/'; // $route = $_SERVER[ 'REDIRECT_URL' ] : $_SERVER[ 'REDIRECT_URL' ] ? '/';

    switch( $route ) {
        case '/':
            require_once PATH_ROOT . 'app' . DS . 'pages' . DS . 'functions' . DS . 'home-functions.php';
            homeRender();
            break;

        case '/voitures':
            echo 'Liste de voitures';
            break;

        default:
            http_response_code( 404 );
            echo '404 - Not Found - Are you drunk ?';
            break;
    }
}