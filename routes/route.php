<?php

// use Models\Route;
// use Controllers\LoginController;

// Route::set('/home', function() use($request) {
//     return LoginController::index($request);
// });

// Route::set('/test', function() use($request) {
//     print_r('some');
// });

$routeUrl = [

    '/home'     => '\Controllers\LoginController::index',
];

?>