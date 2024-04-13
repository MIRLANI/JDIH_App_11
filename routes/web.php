<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HelloController::class, "index"]);
Route::get("/home", [HelloController::class, "home"]);
