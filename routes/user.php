<?php
use Illuminate\Support\Facades\Route;




Route::get('/',[MarkInsertController::class,'insert_form']);
Route::post('create',[MarkInsertController::class,'insert']);