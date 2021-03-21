<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

use CodeSinging\PinAdmin\Http\Controllers;
use CodeSinging\PinAdmin\Facades\Admin;
use Illuminate\Support\Facades\Route;

Admin::routeGroup(function (){

    Route::get('/', [Controllers\IndexController::class, 'index'])->name('index.index');
    Route::get('/home', [Controllers\IndexController::class, 'home'])->name('index.home');

    Admin::resourceRoutes('admin_menus', Controllers\AdminMenusController::class);

});

Admin::routeGroup(function (){

    Route::get('/auth', [Controllers\AuthController::class, 'index'])->name('auth.index');
    Route::post('/auth/login', [Controllers\AuthController::class, 'login'])->name('auth.login');
    Route::get('/auth/logout', [Controllers\AuthController::class, 'logout'])->name('auth.logout');

}, false);