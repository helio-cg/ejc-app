<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pdf/{equipe}',[PdfController::class,'index'])->name('pdf.equipe');
Route::get('equipe/{equipe}',[PdfController::class,'equipe']);
Route::get('incricao/{id}',[PdfController::class,'iscricao'])->name('pdf.inscricao');