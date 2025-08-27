<?php

use App\Http\Controllers\StudentController;
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
Route::get('/', function () {
    return view('Backend.index');
})->name('backPage');
Route::get('/homePage', function () {
    return view('Frontend.index');
})->name('homePage');


Route::controller(StudentController::class)->group(function () {
    Route::get('/allStudent', 'allStudent')->name('allStudent');
    Route::get('/pageAddStudent', 'pageAddStudent')->name('pageAddStudent');
    Route::post('/addStudent', 'addStudent')->name('addStudent');

});