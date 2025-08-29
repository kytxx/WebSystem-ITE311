<?php

namespace Config;

$routes = Services::routes();

// Default route
$routes->get('/', 'Home::index');
