<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Risky;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, "home"]);

Route::post("/form", [App\Http\Controllers\MessageController::class, "form"]);

Route::get("/ikiae", [App\Http\Controllers\IkiaeController::class, "home"]);
