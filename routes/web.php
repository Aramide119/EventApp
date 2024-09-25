<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/' , [EventController::class, "index"]);
Route::get('/about' , [EventController::class, "about"]);
Route::get('/eventDetails' , [EventController::class, "eventDetails"]);
Route::get('/rent' , [EventController::class, "rent"]);
Route::get('/showEvent' , [EventController::class, "showEvent"]);
Route::get('/tickets' , [EventController::class, "tickets"]);
Route::get('/ticketDetails' , [EventController::class, "ticketDetails"]);