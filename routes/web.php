<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvatarController; 


Route::get("/avatar", [AvatarController::class, "pageForm"]);

Route::post("/avatar", [AvatarController::class, 'SimpleHandler'])->name('avatarURL');

