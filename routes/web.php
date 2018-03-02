<?php

use App\Mail\ContactMessageCreated;

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

Route::get('/', [

	'as' => 'home_path',
	'uses' => 'PagesController@home'
]);

// -----------------------------------------------

Route::get('/about', [

	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);


// -----------------------------------------------

Route::get('/contact', [

	'as' => 'contact_path',
	'uses' => 'ContactsController@contact'
]);


Route::post('/contact', [

	'as' => 'contact_path',
	'uses' => 'ContactsController@valid'
]);


Route::get('/test-email', function() {

	return new ContactMessageCreated('Abdias Chafang', 'abdiaschafang@gmail.com', 'merci pour ce tuto');
});
