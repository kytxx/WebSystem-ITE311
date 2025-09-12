<?php

namespace Config;

$routes = Services::routes();

$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

$routes->get('/', 'Home::index');        // Homepage
$routes->get('home/about', 'Home::about');  // About 
$routes->get('home/contact', 'Home::contact'); // Contact 

