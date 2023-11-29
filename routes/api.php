<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\MedicineOutgoingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [ApiAuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'checkACL:medicine_outgoing,read'])->group(function () {
    Route::get('/medicine-outgoing', [MedicineOutgoingController::class, 'index']);
    // Route::get('/medicine-outgoing/{id}', [MedicineOutgoingController::class, 'show']);
});


