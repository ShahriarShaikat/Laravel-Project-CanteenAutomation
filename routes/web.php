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

Route::get('/',function(){
    return redirect()->route('login.index');
});


Route::get('/admin','adminController@index')->name('admin.index');
Route::post('/admin','adminController@check')->name('admin.check');

/*------------------------Admin Middleware------------------------*/

Route::group(['middleware'=>['admin_session']],function(){

    Route::get('/admin/homepage','adminController@view_homepage')->name('admin.homepage');
    //Route::get('/view/users','adminController@saw')->name('users.saw');
    Route::get('/users','adminController@getdata')->name('users.index');
    Route::get('/live_search', 'LiveSearch@index')->name('live_search.show');

    Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
    Route::get('admin/crude', 'CrudeController@index')->name('ajax.crude');
    Route::get('admin/crude/data', 'CrudeController@getData')->name('fetch.data');
    Route::get('admin/crude/store', 'CrudeController@postStore')->name('ajax.store');
    Route::get('admin/contacts/update', 'CrudeController@postUpdate')->name('ajax.crude.edit');
    Route::get('admin/contacts/delete', 'CrudeController@postDelete')->name('ajax.crude.delete');
        
});

/*------------------------END------------------------*/

Route::get('/login','loginController@index')->name('login.index');
Route::get('/signup','signupController@index')->name('signup.index');
Route::post('/login','loginController@verify')->name('home.verify');

/*------------------------User Middleware------------------------*/

Route::group(['middleware'=>['session']],function(){

    Route::get('/home','loginController@user_homepage')->name('home.userhomepage');
    Route::get('/profile','profileController@profile_page')->name('profile.page');
    
});

/*------------------------END------------------------*/


Route::post('/signup','signupController@create')->name('signup.create');

  

Route::get('{id}/edit','adminController@give')->name('edit.give');
Route::get('{uname}/delete','adminController@delete')->name('delete.del');
Route::get('custom_edit/{id}','signupController@display')->name('custom_edit.display');
Route::post('/update/{id}','signupController@update')->name('custom_edit.update');


Route::get('/add_post','postController@show_postpage')->name('show.post');
Route::post('/insert_post','postController@insert_post')->name('insert.post');



Route::get('/view_all_post','postController@view_all_post')->name('view.all.post');
Route::get('/delete_the_post/{id}','postController@delete_the_post')->name('delete.the.post');


Route::get('/view_the_post/{id}','postController@view_the_post')->name('view.the.post');

Route::get('/admin_single_post/{id}','commentController@admin_single_post')->name('admin.single.post');
Route::get('/admin-delete-comment/{id}/{post_id}','commentController@admin_delete_comment')->name('admin.delete.comment');

//post update
Route::post('/singlepost/{id}','postController@singlepost_update')->name('singlepost.edit');

Route::get('/single_page/{id}','postController@single_page_post')->name('single.page');

//insert comment

Route::post('/comment_insert/{id}','postController@comment_insert')->name('comment.insert');
Route::post('/comment_edit_update/{id}/post-id/{post_id}','commentController@comment_edit_update')->name('comment.edit');
Route::get('/delete_comment/{id}/post-id/{post_id}','commentController@delete_comment')->name('delete.comment');
