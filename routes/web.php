<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CrudController::class,'Home']);
Route::get('/AddRecord',[CrudController::class,'AddRecord']);
Route::get('/ShowRecord',[CrudController::class,'ShowRecord']);
Route::get('/CreateRecord',[CrudController::class,'CreateRecord']);
Route::get('Updatedata',[CrudController::class,'Updatedata']);
Route::get('DeleteRecord/{id}',[CrudController::class,'DeleteRecord']);
Route::get('UpdateRecord/{id}',[CrudController::class,'Edit']);