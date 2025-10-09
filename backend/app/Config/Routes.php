<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::Login');
$routes->get('/signup', 'Users::Signup');
$routes->get('/moodboard', 'Users::Moodboard');
$routes->get('/roadmap', 'Users::Roadmap');