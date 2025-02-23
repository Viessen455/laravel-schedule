<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});


Route::get('/schedule', function () {
    return view('schedule', ['title' => 'Schedule']);
});

Route::get('/schedules', [ScheduleController::class, 'getSchedules'])->name('schedules');


Route::get('/countSchedules', [ScheduleController::class, 'countSchedules'])->name('countSchedules');

Route::get('/inventory', function () {
    return view('inventory', ['title' => 'Inventory']);
});

