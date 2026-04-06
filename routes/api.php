<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\MemberController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);
Route::apiResource('members', MemberController::class);
