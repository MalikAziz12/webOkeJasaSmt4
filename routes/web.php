<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;


Route::get('download-invoice/{id}',[InvoiceController::class, 'download'])->name('download-invoice');


Route::get('/', function () {
    return view('welcome');
});
