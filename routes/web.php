<?php

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
//     return view('welcome');
// });

Auth::routes();



Route::get('/', 'HomeController@index')->name('home');
Route::get('exam-name/{exam_name}/{exam_id}', 'ExamController@examType')->name('home');


Route::get('questions/{exam_name}/{exam_id}', 'ExamController@examName')->name('exam');

Route::get('categories/{cat_name}/{cat_id}', 'CategoryController@CategorList')->name('categories');
Route::get('category/{cat_name}/{cat_id}', 'CategoryController@SingleCategory')->name('categories');
Route::get('question/{question_name}/{question_id}', 'questionController@SingleQuestion')->name('question');
Route::get('search', 'questionController@Search')->name('question');


Route::group(['prefix'=>'admin','middleware' => ['admin','auth']], function () {
//Route::prefix('admin')->group(function () {
    
    Route::get('/', 'AdminController@dashBoard');
    Route::get('all-questions', 'questionController@allQuestions')->name('all-questions');
    Route::get('add-question', 'questionController@addQuestion')->name('add-question');
    Route::post('add-question',['as'=>'add.question','uses'=>'questionController@saveQuestion']);
    Route::post('update-question/{question_id}',['as'=>'update.question','uses'=>'questionController@updateQuestion']);

    Route::get('edit/question/{question_id}', 'questionController@editQuestion')->name('edit-question');
    Route::get('delete/question/{question_id}', 'questionController@deleteQuestion')->name('delete-question');


    Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory'])->name('category-tree-view');
	Route::post('add-category',['as'=>'add.category','uses'=>'CategoryController@addCategory']);

	Route::get('question-type',['uses'=>'QuestiontypeController@manageQuestiontype'])->name('question-type');
	Route::post('add-question-type',['as'=>'add.questiontype','uses'=>'QuestiontypeController@addQuestiontype']);

	Route::get('subject',['uses'=>'SubjectController@manageSubject'])->name('subject');
	Route::post('add-subject',['as'=>'add.subject','uses'=>'SubjectController@addSubject']);
    Route::post('check-question',['uses'=>'questionController@checkQuestion']);
    
	//Route::get('my-post', 'PostController@myPost');

});


Route::get('get-data',['uses'=>'getdataController@getData']);

Route::get('send/mail', 'MailController@SendMail')->name('send-mail');