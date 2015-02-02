<?php

/**
 * API ROUTES
 */

$router->group(['prefix' => 'api'], function($router)
{
    $router->get('/', function()
    {
        return "API";
    });
});