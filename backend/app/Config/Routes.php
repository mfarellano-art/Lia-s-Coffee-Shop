<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Login::index');
$routes->get('/signup', 'Signup::index');
$routes->get('/roadmap', 'Roadmap::index');
$routes->get('/moodboard', 'Moodboard::index');