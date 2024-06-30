<?php
namespace App\Http\Controllers;

use App\Http\Controllers\BlogSiteController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

// index route
Route::get('/home',[BlogSiteController::class,'home'])->name('BlogSite.home');

// create route
Route::get('/home/create',[BlogSiteController::class,'create'])->name('BlogSite.create');

// store route
Route::post('/home/store',[BlogSiteController::class,'store'])->name('BlogSite.store');

// view route
Route::get('/home/view',[BlogSiteController::class,'view'])->name('BlogSite.view');