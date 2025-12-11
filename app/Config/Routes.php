<?php

namespace Config;

$routes = Services::routes();

$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');

$routes->get('/', 'Home::index');        // Homepage
$routes->get('home/about', 'Home::about');  // About 
$routes->get('home/contact', 'Home::contact'); // Contact 

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Auth::dashboard'); 

$routes->get('/announcements', 'Announcements::index');

$routes->get('announcements', 'Announcements::index');

$routes->get('/instructor/dashboard', 'Instructor::dashboard');
$routes->get('/instructor/courses', 'Instructor::courses');
$routes->get('/instructor/my_students', 'Instructor::my_students');

$routes->get('/instructor/course/courses', 'Instructor::courses');

$routes->get('/instructor/course/(:num)/manage', 'Instructor::manageCourse/$1');
$routes->match(['get', 'post'], '/instructor/course/upload', 'Materials::upload');
// $routes->post('instructor/course/upload', 'CourseController::uploadMaterial');

$routes->get('/admin/dashboard', 'Admin::dashboard');

$routes->post('course/enroll', 'Course::enroll'); 
$routes->get('/my-courses', 'Dashboard::myCourses');
$routes->get('/my-grades', 'Dashboard::myGrades');

// Materials routes
$routes->get('/admin/course/(:num)/upload', 'Materials::upload/$1');
$routes->post('/admin/course/(:num)/upload', 'Materials::upload/$1');
$routes->post('/materials/delete/(:num)', 'Materials::delete/$1');
$routes->get('/materials/download/(:num)', 'Materials::download/$1');
$routes->get('/course/(:num)/materials', 'Materials::viewMaterials/$1');
$routes->get('/course/(:num)/materials', 'Materials::viewMaterials/$1');

