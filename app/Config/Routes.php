<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\DataController;
use App\Controllers\Register;
use App\Controllers\InputForm;
/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'InputForm::index');
// $routes->post('/submitData', 'InputForm::submitData'); 
$routes->get('/userdata','InputForm::data');

