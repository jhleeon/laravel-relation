<?php

use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Faker\Guesser\Name;
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

Route::get('/peoples',[PeopleController::class,'index'])->name('people.index');
Route::get('/peoples/create',[PeopleController::class,'create'])->name('people.create');
Route::post('/peoples/create',[PeopleController::class,'store'])->name('people.store');
Route::get('/peoples/{people}/edit',[PeopleController::class,'edit'])->name('people.edit');
Route::put('/peoples/{people}',[PeopleController::class,'update'])->name('people.update');
Route::get('/peoples/{people}/show',[PeopleController::class,'show'])->name('people.show');
Route::delete('/peoples/{people}',[PeopleController::class,'delete'])->name('people.delete');



Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students/create',[StudentController::class,'store'])->name('students.store');
Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('students.edit');
Route::put('/students/{student}',[StudentController::class,'update'])->name('students.update');
Route::get('/students/{student}/show',[StudentController::class,'show'])->name('students.show');
Route::delete('/students/{student}',[StudentController::class,'delete'])->name('students.delete');


Route::get('/profiles/{student}/show',[ProfileController::class,'show'])->name('profiles.show');
Route::get('/profiles/{student}/edit',[ProfileController::class,'edit'])->name('profiles.edit');
Route::post('/profiles/{student}/update',[ProfileController::class,'updateOrCreate'])->name('profiles.update');