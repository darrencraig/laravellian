<?php

/**
 * ADMIN ROUTES
 */

$router->group(['prefix' => 'admin', 'middleware' => 'auth'], function($router)
{
    $router->get('/', function()
    {
        return "ADMIN";
    });
});