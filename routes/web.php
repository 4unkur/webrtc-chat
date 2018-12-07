<?php

/** @var Illuminate\Routing\Router $router */

$router->get('', 'ChatController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
