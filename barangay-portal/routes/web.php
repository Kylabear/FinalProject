<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\ClearanceRequestController;

Route::get('/', function () {
    return view('welcome');
});

// For Resident Registration
Route::get('/residents/create', [ResidentController::class, 'create'])->name('residents.create');
Route::post('/residents', [ResidentController::class, 'store'])->name('residents.store');
Route::get('/residents', [ResidentController::class, 'index'])->name('residents.index');

// For Brgy Clearance Requests
Route::get('/clearance-requests', [ClearanceRequestController::class, 'index']);
Route::get('/clearance-requests/create', [ClearanceRequestController::class, 'create']);
Route::post('/clearance-requests', [ClearanceRequestController::class, 'store']);

// For Print of Clearance
Route::get('/clearance-requests/{id}/print', [ClearanceRequestController::class, 'print'])->name('clearance-requests.print');
