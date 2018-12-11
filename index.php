<?php
// configuration
include_once('_config.php');

// lance l'application
ConfigApp::start();

(isset($_GET['action'])) ? $action = $_GET['action'] : $action = "home" ;

// lancer le routeur
$routeur = new Routeur($action);
$routeur->render();
