<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OccationController;

Route::get('/', function () {
    return view('index');
});

Route::get('/create',[OccationController::class, 'create'])->name('occation.create');