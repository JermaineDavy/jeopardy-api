<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(QuestionController::class)->group(function() {
    Route::get('/random/{answer?}', 'getRandomQuestion');
    Route::get('/answer/{questionId}', 'getAnswer');
    Route::get('/categories', 'getCategories');
    Route::get('/categories/random', 'getRandomCategory');
    Route::get('/categories/question/{categoryId}', 'getRandomQuestionFromCategory');
});
