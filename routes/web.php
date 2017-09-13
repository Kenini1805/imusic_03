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

Route::group(['prefix' => 'admin','middleware'=>'auth'],function(){
	Route::group(['prefix' => 'artist'],function(){
			Route::get('list','ArtistController@getlist');
			Route::get('add',function(){
				return view ('admin.artist.add');
			});
			Route::post('add','ArtistController@postAdd');
			Route::get('edit/{id}','ArtistController@getedit');
			Route::post('edit/{id}','ArtistController@postedit');
			Route::get('delete/{id}','ArtistController@getdelete');
	});

	Route::group(['prefix' => 'category'],function(){
			Route::get('list','CategoryController@getlist');
			Route::get('add',function(){
				return view('admin.category.add');
			});
			Route::post('add','CategoryController@postadd');
			Route::get('edit/{id}','CategoryController@getedit');
			Route::post('edit/{id}','CategoryController@postedit');
			Route::get('delete/{id}','CategoryController@getdelete');
	});

	Route::group(['prefix' => 'file'],function(){
			Route::get('list','FileController@getlist');
			Route::get('add',function(){
				return view('admin.file.add');
			});
			Route::post('add','FileController@postadd');
			Route::get('add','FileController@getFormAdd');
			Route::get('edit/{id}','FileController@getedit');
			Route::post('edit/{id}','FileController@postedit');
			Route::get('delete/{id}','FileController@getdelete');
	});
	Route::group(['prefix' => 'genre'],function(){
			Route::get('list','GenreController@getlist');
			Route::get('add',function(){
				return view('admin.genre.add');
			});
			Route::post('add','GenreController@postadd');
			Route::get('edit/{id}','GenreController@getedit');
			Route::post('edit/{id}','GenreController@postedit');
			Route::get('delete/{id}','GenreController@getdelete');
	});
	Route::group(['prefix' => 'comment'],function(){
			Route::get('delete/{id}/{fileid}','CommentController@getdelete');
	});

	Route::group(['prefix' => 'user'],function(){
			Route::get('list','UserController@getlist');
	        Route::get('add',function(){
	            return view('admin.user.add');
	        });
	        Route::post('add','UserController@postadd');
	        Route::get('edit/{id}','UserController@getedit');
	        Route::post('edit/{id}','UserController@postedit');
	        Route::get('delete/{id}','UserController@getdelete');
	        Route::get('edit/{id}','UserController@getedit2');
	});
});
Auth::routes();

Route::any('logout','Auth\LoginController@logout');

Route::any('getListMix','PagesController@getMoreListMix');
Route::any('getListTrack','PagesController@getMoreListTrack');
Route::any('getListVideo','PagesController@getMoreListVideo');
Route::get('/home','PagesController@home')->middleware('web');
Route::get('category/{id}/{name}.html','PagesController@category');
Route::group(['middleware' => 'filter'], function(){
	Route::get('{category_name}/{id}/{slug_name}.html','PagesController@detail');
});
// Login fb
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
Route::get('auth/logout', 'PagesController@authlogout');
Route::post('auth/login', 'PagesController@authlogin');
Route::post('auth/register', 'PagesController@authregister');
Route::post('auth/registerv2', 'PagesController@authregisterv2');
Route::post('search', 'PagesController@search');
