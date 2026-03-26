<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello World';
});

route::get('/about', function () {
    return 'About Us';
});
