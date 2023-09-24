<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundiController;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home',[FundiController::class,'index']);
Route::get('/fungua_mafundi',[FundiController::class,'fungua_mafundi']);
Route::get('/vuta_mafundi',[FundiController::class,'vuta_mafundi']);
Route::get('/badilisha_taarifa',[FundiController::class,'badilisha_taarifa']);


// Route::get('students', [FundiController::class, 'index']);
// Route::post('students', [FundiController::class, 'store']);
// Route::get('fetch-students', [FundiController::class, 'fetchstudent']);
Route::get('edit-student/{id}', [FundiController::class, 'edit']);
// Route::put('update-student/{id}', [FundiController::class, 'update']);
Route::delete('delete-student/{id}', [FundiController::class, 'destroy']);

Route::post('/save_form',[FundiController::class,'save_form']);
Route::get('/save_form',[FundiController::class,'save_form']);
