<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\umumcontroller;
use App\Http\Controllers\KomparemController;
use App\Http\Controllers\WanitaController;
use App\Http\Controllers\PriaController;
use App\Http\Controllers\PenginjilanController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\JadwalController;




Route::get('/',[JadwalController::class , "index"]);

Route::get('/umum',[umumcontroller::class , "index"]);
Route::get('/komparem',[KomparemController::class , "index"]);
Route::get('/wanita',[WanitaController::class , "index"]);
Route::get('/pria',[PriaController::class , "index"]);
Route::get('/penginjilan',[PenginjilanController::class , "index"]);
Route::get('/anak',[AnakController::class , "index"]);

Route::get('/komparem/search', [KomparemController::class, 'search'])->name('komparem.search');
Route::get('/pria/search', [PriaController::class, 'search'])->name('pria.search');
Route::get('/penginjilan/search', [PenginjilanController::class, 'search'])->name('penginjilan.search');
Route::get('/anak/search', [AnakController::class, 'search'])->name('anak.search');
Route::get('/umum/search', [UmumController::class, 'search'])->name('umum.search');
Route::get('/wanita/search', [WanitaController::class, 'search'])->name('wanita.search');






Route::middleware(["auth"])->group(function(){

    Route::get('/jadwal/create',[JadwalController::class , "create"]);
    Route::post('/jadwal/store',[JadwalController::class , "store"]);
    Route::delete('/jadwal/{id}',[JadwalController::class , "destroy"]);

    Route::get('/umum/create',[umumcontroller::class , "create"]);
    Route::post('/umum/store',[umumcontroller::class , "store"]);
    Route::get('/umum/{id}/edit',[umumcontroller::class , "edit"]);
    Route::put('/umum/{id}',[umumcontroller::class , "update"]);
    Route::delete('/umum/{id}',[umumcontroller::class , "destroy"]);
    
    Route::get('/komparem/create',[KomparemController::class , "create"]);
    Route::post('/komparem/store',[KomparemController::class , "store"]);
    Route::get('/komparem/{id}/edit',[KomparemController::class , "edit"]);
    Route::put('/komparem/{id}',[KomparemController::class , "update"]);
    Route::delete('/komparem/{id}',[KomparemController::class , "destroy"]);
    
    Route::get('/wanita/create',[WanitaController::class , "create"]);
    Route::post('/wanita/store',[WanitaController::class , "store"]);
    Route::get('/wanita/{id}/edit',[WanitaController::class , "edit"]);
    Route::put('/wanita/{id}',[WanitaController::class , "update"]);
    Route::delete('/wanita/{id}',[WanitaController::class , "destroy"]);
    
    Route::get('/pria/create',[PriaController::class , "create"]);
    Route::post('/pria/store',[PriaController::class , "store"]);
    Route::get('/pria/{id}/edit',[PriaController::class , "edit"]);
    Route::put('/pria/{id}',[PriaController::class , "update"]);
    Route::delete('/pria/{id}',[PriaController::class , "destroy"]);
    
    
    Route::get('/penginjilan/create',[PenginjilanController::class , "create"]);
    Route::post('/penginjilan/store',[PenginjilanController::class , "store"]);
    Route::get('/penginjilan/{id}/edit',[PenginjilanController::class , "edit"]);
    Route::put('/penginjilan/{id}',[PenginjilanController::class , "update"]);
    Route::delete('/penginjilan/{id}',[PenginjilanController::class , "destroy"]);
    
    Route::get('/anak/create',[AnakController::class , "create"]);
    Route::post('/anak/store',[AnakController::class , "store"]);
    Route::get('/anak/{id}/edit',[AnakController::class , "edit"]);
    Route::put('/anak/{id}',[AnakController::class , "update"]);
    Route::delete('/anak/{id}',[AnakController::class , "destroy"]);



    
});









Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
