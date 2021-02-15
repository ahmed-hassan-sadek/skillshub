<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SkillController;
use App\Http\Controllers\Web\ExamController;
use App\Http\Controllers\Web\LangController;




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

Route::middleware('lang')->group(function() {
    Route::get('/', [HomeController::class,'index']);
    Route::get('/categories/show/{id}', [CategoryController::class,'show']);
    Route::get('/skills/show/{id}' , [SkillController::class , 'show']);
    Route::get('/exams/show/{id}' , [ExamController::class , 'show']);
    Route::get('/exams/questions/{id}' , [ExamController::class , 'questions']);
});


Route::get('/lang/set/{lang}' , [LangController::class , 'set']);


