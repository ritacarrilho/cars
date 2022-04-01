<?php
// Constantes de chemins
define( 'DS', DIRECTORY_SEPARATOR ); //Alias pratique pour écriredes chemins plus court
define( 'PATH_ROOT', __DIR__ . DS ); // Contiendra le chemin fichier absolut de la racine du projet

// Protege de eventual decriptage
// Sécurité des mots de passe
define( 'SEC_SALT', 'kjcl44ez3%78p@e' ); // admin1234
define( 'SEC_PEPPER', 'd(z789#fd5z%r@' ); // admin1234

// echo hash('sha512', 'kjcl44ez3%78p@e@admin1234d(z789#fd5z%r@');

// Démarrage de la session
session_start();

// charger les functions du fichier router.php
require_once PATH_ROOT . 'app' . DS . 'router.php';

// Démarrage de l'application (c'est le router qui provoque la suite)
routerStart();