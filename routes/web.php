<?php

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

Route::get('/', 'HomeController@index');

Route::post('identify', 'HomeController@identifyUser');

Route::get('/poll/questions', 'QuestionController@index');

Route::post('/poll/questions', 'QuestionController@save');

Route::get('/poll/answers', 'AnswersController@getAnswersByQuestion');

Route::post('/poll/answers', 'AnswersController@save');

Route::get('/poll/votes', 'VotesController@index');

Route::get('/poll/votes/questions/{id}', 'VotesController@showVoteAnswers');

Route::post('/poll/votes/questions/{id}', 'VotesController@submitVoteAnswer');

Route::get('/poll/results', 'PollResultsController@index');

// Route::get('poll', [PollQuestionsController::class, 'index']);

// route to process the form
// Route::post('login', array('uses' => 'HomeController@doLogin'));