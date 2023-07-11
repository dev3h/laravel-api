<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contacts', [ContactController::class, 'getAllContacts']);
Route::get('/contacts/{id}', [ContactController::class, 'getContact']);
Route::post('/contacts', [ContactController::class, 'storeContact']);
Route::put('/contacts/{id}', [ContactController::class, 'updateContact']);
Route::delete('/contacts/{id}', [ContactController::class, 'deleteContact']);