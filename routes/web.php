<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CrudController::class,'Home']);
Route::get('/AddBlog',[CrudController::class,'AddBlog']);
Route::get('/CreateBlogRecord',[CrudController::class,'CreateBlogRecord']);
Route::get('/BlogRecord',[CrudController::class,'BlogRecord']);
Route::get('DeleteBlogRecord/{id}',[CrudController::class,'DeleteBlogRecord']);
Route::get('UpdateBlogdata',[CrudController::class,'UpdateBlogdata']);
Route::get('UpdateBlogRecord/{id}',[CrudController::class,'EditBlog']);
Route::get('/ShowUserBlog/{id}',[CrudController::class,'ShowUserBlog']);
Route::get('/AddRecord',[CrudController::class,'AddRecord']);
Route::get('/ShowRecord',[CrudController::class,'ShowRecord']);
Route::get('/CreateRecord',[CrudController::class,'CreateRecord']);
Route::get('Updatedata',[CrudController::class,'Updatedata']);
Route::get('DeleteRecord/{id}',[CrudController::class,'DeleteRecord']);
Route::get('UpdateRecord/{id}',[CrudController::class,'Edit']);