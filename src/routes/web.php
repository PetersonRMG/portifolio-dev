<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [AboutController::class, 'about'])->name('aboutUs');
Route::get('/servicos', [ServiceController::class , 'service'])->name('services');
Route::get('/contato',[ContactController::class , 'contact'])->name('contact');
Route::get('/news' ,[NewsController::class, 'news'])->name('news');

