<?php

namespace Config;

$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

$routes->get('/', 'Home::index');        // Homepage
$routes->get('home/about', 'Home::about');  // About Page
$routes->get('home/contact', 'Home::contact'); // Contact Page

