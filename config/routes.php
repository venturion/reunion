<?php
$routes = array(
    "routes" => array(
        "index" => array(
            'GET|POST',
            '/',
            'home#index',
            'home'
        ) ,
        "list" => array(
            'GET',
            '/users',
            array(
                'c' => 'UserController',
                'a' => 'ListAction'
            )
        ) ,
        "users_show" => array(
            'GET',
            '/users/[i:id]',
            'users#show',
            'users_show'
        ) ,
        "users_do" => array(
            'POST',
            '/users/[i:id]/[delete|update:action]',
            'usersController#doAction',
            'users_do'
        ) ,
    )
);
?>
