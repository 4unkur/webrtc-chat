<?php

/** @var Illuminate\Routing\Router $router */

Auth::routes();

$router->get('', 'ChatController@index');