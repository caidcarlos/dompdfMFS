<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/document', [DocumentController::class, 'index']);
Route::get('/documentPDF', [DocumentController::class, 'download'])->name('download');
Route::get('/document-i130', [DocumentController::class, 'downloadI130'])->name('download-i130');