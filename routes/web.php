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

Route::get('/', 'MainController@home')->name('homepage');

Route::get('about', 'MainController@about')->name('aboutpage');

Route::get('contact', 'MainController@contact')->name('contactpage');

Route::get('books', 'MainController@books')->name('bookspage');

Route::get('action', 'MainController@action')->name('actionpage');

Route::get('newarrivel', 'MainController@newarrivel')->name('newarrivelpage');

Route::get('classic', 'MainController@classic')->name('classicpage');

Route::get('education', 'MainController@education')->name('educationpage');

Route::get('free', 'MainController@free')->name('freepage');

Route::get('funny', 'MainController@funny')->name('funnypage');

Route::get('horror', 'MainController@horror')->name('horrorpage');

Route::get('romance', 'MainController@romance')->name('romancepage');

Route::get('knowledge', 'MainController@knowledge')->name('knowledgepage');

// Working with data in blade file
Route::get('service','MainController@service')->name('servicepage');

//CRUD for student table
Route::resource('student','StudentController'); // resource (get/post/put/delete)
