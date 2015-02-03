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

$router->get('{category}/{category}/{category}/{slug}', 'PagesController@show');
$router->get('{category}/{category}/{slug}', 'PagesController@show');
$router->get('{category}/{slug}', 'PagesController@show');
$router->get('{slug}', 'PagesController@show');