<?php

\App\Router::get('/', [\App\Controllers\HomeController::class, 'index']);
\App\Router::get('/user', [\App\Controllers\HomeController::class, 'user']);