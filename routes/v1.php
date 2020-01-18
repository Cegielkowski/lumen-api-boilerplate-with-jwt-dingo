<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->post('register', 'AuthController@register');
    $api->post('login', 'AuthController@login');
    $api->get('profile', 'UserController@profile');
    $api->get('users/{id}', 'UserController@singleUser');
    $api->get('users', 'UserController@allUsers');
});