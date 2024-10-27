<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/list-task", [TaskController::class, "index"]);
Route::get("/create-task", [TaskController::class, "create"]);
Route::post("/create-task", [TaskController::class, "store"]);
Route::get("/update-task/{task}", [TaskController::class, "edit"]);
Route::post("/update-task/{task}", [TaskController::class, "update"]);
Route::get("/delete-task/{task}", [TaskController::class, "delete"]);
