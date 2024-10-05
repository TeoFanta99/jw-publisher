<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PreacherController;
use App\Http\Controllers\PreacherAvailabilityController;
use App\Http\Controllers\Step1Controller;

Route::get('/', [MainController :: class, 'index']) -> name('step1');
Route::get('/preachers', [PreacherController :: class, 'index']) -> name('preachers');
Route::get('/preachers/{id}', [PreacherController :: class, 'show']) -> name('show.preacher');

Route::put('/preacheravailability/{preacheravailabilityID}/update', [PreacherAvailabilityController::class, 'update'])->name('update.preacheravailability');

Route::get('/create-step1', [Step1Controller :: class, 'create']) -> name('create.step1');
