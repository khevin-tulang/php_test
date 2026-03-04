<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => 'index.php',
    '/login' => 'login.php',
    '/register' => 'register.php',
    '/dashboard' => 'dashboard.php',
    '/logout' => 'logout.php',
];