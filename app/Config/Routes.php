<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Route for Playlist
$routes->get('playlist', 'PlaylistController::index', ['as' => 'playlist']);
$routes->get('playlist/show/(:num)', 'PlaylistController::show/$1', ['as' => 'playlist.show']);
$routes->get('playlist/create', 'PlaylistController::create', ['as' => 'playlist.create']);
$routes->post('playlist/store', 'PlaylistController::store', ['as' => 'playlist.store']);
$routes->get('playlist/edit/(:num)', 'PlaylistController::edit/$1', ['as' => 'playlist.edit']);
$routes->post('playlist/update/(:num)', 'PlaylistController::update/$1', ['as' => 'playlist.update']);
$routes->get('playlist/delete/(:num)', 'PlaylistController::delete/$1', ['as' => 'playlist.delete']);