<?php
use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\UserController;

Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/','index');
    Route::get('/detail/{id}','detail');
    Route::get('/create','create');
});


?>