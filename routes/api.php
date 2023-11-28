<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'checkacl:medicine_outgoing,read'])->group(function () {
    Route::get('/medicine-outgoing', [MedicineOutgoingController::class, 'index']);
    // Route::get('/medicine-outgoing/{id}', [MedicineOutgoingController::class, 'show']);
});


