<?php
spl_autoload_extensions('.php');
spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    for($i=0; $i<count($class)-1; $i++){
        $class[$i] = strtolower($class[$i]);
    }
    include __DIR__ .  '/' . implode('/', $class) . '.php';
});