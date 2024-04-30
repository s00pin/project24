<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Movies;
use App\Controllers\Media;

$routes->get('/', 'Home::index');

$routes->get('news', [News::class, 'index']);   
$routes->get('news/new', [News::class, 'new']); 
$routes->post('news', [News::class, 'create']);       
$routes->get('news/(:segment)', [News::class, 'show']); 


$routes->get('media', [Media::class, 'index']);
$routes->get('media/(:segment)', [Media::class, 'show']); 


$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
$routes->get('movies', 'Movies::index');
