<?php

/**
 * WEBSITE ROUTES
 */

$router->get('/', 'HomeController@index');







/**
 * Catch all routes for pages.
 *
 * Place all other routes above here.
 */

$router->get('{one}/{two}/{three}/{slug}', 'PagesController@show');
$router->get('{one}/{two}/{slug}', 'PagesController@show');
$router->get('{one}/{slug}', 'PagesController@show');
$router->get('{slug}', 'PagesController@show');