<?php

$router->get('', 'PageController@index');
$router->get('contact', 'PageController@contact');
$router->get('about', 'PageController@about');

$router->get('users', 'UserController@index');
$router->post('user/store', 'UserController@store');