<?php

use App\Http\Controllers\Frontpages;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('home',[Frontpages::class,'home'])->name('home');
Route::get('about',[Frontpages::class,'about'])->name('about');
Route::get('blog',[Frontpages::class,'blog'])->name('blog');
Route::get('shop',[Frontpages::class,'shop'])->name('shop');
Route::get('about',[Frontpages::class,'about'])->name('about'); //for git commit