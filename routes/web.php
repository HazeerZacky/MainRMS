<?php
use App\Http\Controllers\MyController;
use App\Http\Controllers\ConDatabase;
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

// Route::get('/', function () {
//     return view('home');
// });

//Navigation Parts===========================================
Route::get('/',[MyController::class, 'home']);
Route::get('/results',[MyController::class, 'results']);
Route::get('/student',[MyController::class, 'student']);
Route::get('/class',[MyController::class, 'class']);
Route::get('/teacher',[MyController::class, 'teacher']);
Route::get('/subject',[MyController::class, 'subject']);
Route::get('/result',[MyController::class, 'result']);
Route::get('/admin',[MyController::class, 'admin']);
Route::get('/about',[MyController::class, 'about']);
Route::get('/contact',[MyController::class, 'contact']);
//===========================================================

//Data Connection============================================
Route::post('addclass',[MyController::class,'addclass']);
Route::post('editclass',[MyController::class,'editclass']);
Route::get('delete/{c}',[MyController::class,'delete'])->name('delete'); //{c} = Passing variable