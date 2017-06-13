<?php

//autochargement des classes
require '../vendor/autoload.php';

//configuration
require '../app/config.php';

// rares fonctions globales
require '../W/globals.php';

//instancie notre appli en lui passant la config et les routes
$app = new W\App($w_routes, $w_config);// on récupère les routes et la config
// si tout correspond apres  comparaison avec tableau des routes-> va contacter la view

//exécute l'appli
$app->run();// c'est le front controller qui s'éxécute
