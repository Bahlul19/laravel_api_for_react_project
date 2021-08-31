<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//Chart Data Router
$router->get('/chartdata', 'ChartDataController@onAllSelect');
$router->get('/clientreview', 'ClientReviewController@onAllSelect');
$router->post('/sendcontact', 'ContactController@addContactForm');

//Course Router
$router->get('/coursehome', 'CoursesController@onSelectForHome');
$router->get('/allcourses', 'CoursesController@onSelectAll');
$router->post('/coursedetails', 'CoursesController@onSelectDetails');

//Footer Router
$router->get('/footer', 'FooterController@onSelectAll');

//Information
$router->get('/information', 'InformationController@onSelectAll');

//Services
$router->get('/services', 'ServiceController@onSelectAll');