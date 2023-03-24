<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursesUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use \App\Models\coursesUser;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* ------------------------------------------------------------------------------------ */
Route::get('/programmer',[CourseController::class,'index']);


Route::group(['middleware' => 'Student'],function () {
    Route::get('/programmer/{course}', [CourseController::class, 'show']);
});


Route::group(['middleware' => 'Admin'],function (){
    Route::get('/programmer/{course}/users',[CourseController::class,'userscourse']);
    Route::get('/programmer/create/course',[CourseController::class,'create']);
    Route::post('/programmer/create/course',[CourseController::class,'store']);
    Route::get('/programmer/{course}/edit',[CourseController::class,'edit']);
    Route::put('/programmer/{course}/edit',[CourseController::class,'update']);
    Route::get('/programmer/users/show',[UserController::class,'show']);
    Route::get('/programmer/users/show/{user}',[UserController::class,'edit']);
    Route::put('/programmer/users/show/{user}',[UserController::class,'update']);
    Route::get('/programmer/users/delete/{user}',[UserController::class,'destroy']);

});
