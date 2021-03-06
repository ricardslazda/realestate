<?php

$router = new AltoRouter();
$router->setBasePath(getenv('APP_ROOT'));
$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');
$router->map('GET', '/listings', 'App\Controllers\ListingController@all', 'all_listings');
$router->map('GET', '/listings/[a:type]', 'App\Controllers\ListingController@type', 'only_certain_properties');
$router->map('GET', '/listings/[a:type]/[i:id]', 'App\Controllers\ListingController@listing', 'single_listing');
