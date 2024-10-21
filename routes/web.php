<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\VotingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store']);
Route::get('/voting', [VotingController::class, 'index']);
Route::post('/voting/save', [VotingController::class, 'save']);
Route::get('/voting/show', [VotingController::class, 'show']);


