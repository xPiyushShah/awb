<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\DataController;
use App\Controllers\Register;
use App\Controllers\InputForm;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'InputForm::index'); // Route to display the input form
$routes->post('/input_form', 'InputForm::submitData'); // Route to handle form submission
$routes->get('/userdata','DataController::data');


// $routes->get('/', 'Register::index');
// $routes->get('/', 'Home::index');
// $routes->post('/upload','Home::confirm');

