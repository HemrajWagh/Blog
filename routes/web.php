<?php

    //User Routes
Route::group(['namespace'=>'User'],function(){
    Route::get('/','HomeController@index');
    Route::get('post/{post}','PostController@post')->name('post'); 
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');   
    Route::get('post/category/{category}','HomeController@category')->name('category');   
});

    // Admin Routes
Route::group(['namespace'=>'Admin'],function(){

    Route::get('admin/home','HomeController@index')->name('admin.home');
    //Users Route
    Route::resource('admin/user','UserController');
    //Roles Route
    Route::resource('admin/role','RoleController');
    //Permission Route
    Route::resource('admin/permission','PermissionController');
    // Post Routes
    Route::resource('admin/post','PostController');
    // Tag Routes
    Route::resource('admin/tag','TagController');
    // Category Routes
    Route::resource('admin/category','CategoryController');


    //  Admin Auth Routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');

});

// Route::get('admin/home',function(){
//     return view('admin.home');
// })->name('post');

// Route::get('admin/post',function(){
//     return view('admin.post.post');
// });

// Route::get('admin/tag',function(){
//     return view('admin.tag.tag');
// });

// Route::get('admin/category',function(){
//     return view('admin.category.category');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
