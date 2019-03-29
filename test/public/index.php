<?php
require_once '../autoload.php';
$router = new \App\Router();

function view($path, $vars){
    extract($vars);
    require '../views/index.php';
}