<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Route for Playlist
// $routes->get('playlist', 'PlaylistController::index', ['as' => 'playlist']);
// $routes->get('playlist/show/(:num)', 'PlaylistController::show/$1', ['as' => 'playlist.show']);
// $routes->get('playlist/create', 'PlaylistController::create', ['as' => 'playlist.create']);
// $routes->post('playlist/store', 'PlaylistController::store', ['as' => 'playlist.store']);
// $routes->get('playlist/edit/(:num)', 'PlaylistController::edit/$1', ['as' => 'playlist.edit']);
// $routes->post('playlist/update/(:num)', 'PlaylistController::update/$1', ['as' => 'playlist.update']);
// $routes->get('playlist/delete/(:num)', 'PlaylistController::delete/$1', ['as' => 'playlist.delete']);

$routes->group('playlist', static function($routes){
    $routes->get('/', 'PlaylistController::index', ['as' => 'playlist']);
    $routes->get('show/(:num)', 'PlaylistController::show/$1', ['as' => 'playlist.show']);
    $routes->get('create', 'PlaylistController::create', ['as' => 'playlist.create']);
    $routes->post('store', 'PlaylistController::store', ['as' => 'store']);
    $routes->get('edit/(:num)', 'PlaylistController::edit/$1', ['as' => 'playlist.edit']);
    $routes->post('update/(:num)', 'PlaylistController::update/$1', ['as' => 'playlist.update']);
    $routes->post('delete/(:num)', 'PlaylistController::delete/$1', ['as' => 'playlist.delete']);
});

$routes->group('musik', static function($routes){
    $routes->get('/', 'MusikController::index', ['as' => 'musik']);
    $routes->get('show/(:num)', 'MusikController::show/$1', ['as' => 'musik.show']);
    $routes->get('create', 'MusikController::create', ['as' => 'musik.create']);
    $routes->post('store', 'MusikController::store', ['as' => 'store']);
    $routes->get('edit/(:num)', 'MusikController::edit/$1', ['as' => 'musik.edit']);
    $routes->post('update/(:num)', 'MusikController::update/$1', ['as' => 'musik.update']);
    $routes->post('delete/(:num)', 'MusikController::delete/$1', ['as' => 'musik.delete']);
});
