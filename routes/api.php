<?php
// routes/api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Импортируем контроллер

Route::post('/handle-request', [UserController::class, 'handleRequest']);


