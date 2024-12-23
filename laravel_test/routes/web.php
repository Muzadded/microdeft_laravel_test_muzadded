<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequisitionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/requisition', function () {
    return view('requisition_view');
});
Route::post('/add',[RequisitionController::class, 'insert']);
