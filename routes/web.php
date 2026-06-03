<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, "index"]);

