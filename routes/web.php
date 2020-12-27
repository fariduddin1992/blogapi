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

// Route::get('/dash', function () {
//     return view('backend/master');
// });
// Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');


 Route::get('/dash', 'HomeController@index');
// Route::get('/', 'Frontend\IndexController@index');
// Route::get('/privacy', 'Frontend\IndexController@privacy');
// Route::get('about', 'Frontend\AboutController@index')->name('about.index');
// Route::get('contactus', 'Frontend\ContactController@index')->name('contact.index');

Route::get('{category}/{subId}/aritcles/{id}/{slug}', 'Frontend\PostsController@show')->name('posts.show');
// category post show
Route::get('{category}/{id}/{subcategory}/{subId}', 'Frontend\IndexController@categoryPost')->name('post.category');
// Route::get('/contactus', 'Frontend\ContactController@index');
// Route::get('/contactus', 'Frontend\ContactController@index');
Route::get('edit/{id}', 'Backend\PostController@edit')->name('post.edit');
Route::post('admin/post/edit/{slug}', 'Backend\PostController@update')->name('post.update');



//Route::get('/single/{slug}', 'Frontend\PostsController@show')->name('posts.show');

// Main slug

// Route::get('{category}/{subcategory}/{id}/{slug}', 'Frontend\PostsController@phonePostShow');

//phone category show
Route::get('mobile/{name}', 'Frontend\PostsController@phoneCategoryShow')->name('phone.show');

Route::get('/education/{category}/{subcategory}/tutorial/{id}/{slug}', 'Frontend\PostsController@tutorialPost')->name('posts.tutorialPost');

Route::get('/{category}', 'Frontend\PostsController@getCategoryPost')->name('posts.show');

Route::group(['prefix' => 'frontend'], function () {
    /***
     * Category Routes
     */
    Route::get('/study', 'Frontend\IndexController@studyPage');

    Route::group(['prefix' => 'contactus'], function () {

        Route::get('/', 'Frontend\ContactController@index');
        Route::post('/store', 'Frontend\ContactController@store');
    });
});

Route::group(['prefix' => 'admin'], function () {
    /***
     * Category Routes
     */
    Route::group(['prefix' => 'category'], function () {
        // Route::get('/', 'Backend\CategoryController@index')->name('category.index');
        Route::get('/create', 'Backend\CategoryController@create')->name('category.create');
        Route::post('/store', 'Backend\CategoryController@store')->name('category.store');
        Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('category.edit');
        Route::post('/update/{id}', 'Backend\CategoryController@update')->name('category.update');
        Route::delete('/destroy/{id}', 'Backend\CategoryController@destroy')->name('category.delate');
    });
    Route::group(['prefix' => 'subcategory'], function () {
        Route::get('/', 'Backend\SubCategoryController@index')->name('subCategory.index');
        Route::get('/create', 'Backend\SubCategoryController@create')->name('subCategory.create');
        Route::post('/store', 'Backend\SubCategoryController@store')->name('subCategory.store');
        Route::get('/edit/{id}', 'Backend\SubCategoryController@edit')->name('subCategory.edit');
        Route::post('/update/{id}', 'Backend\SubCategoryController@update')->name('subCategory.update');
    });
    /**
     * tags Routes
     */
    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', 'Backend\TagController@index')->name('admin.tag.index');
        Route::get('/add', 'Backend\TagController@create')->name('admin.tag.create');
        Route::post('/store', 'Backend\TagController@store')->name('admin.tag.store');
        Route::get('/edit/{slug}', 'Backend\TagController@edit')->name('admin.tag.edit');
        Route::post('/edit/{slug}', 'Backend\TagController@update')->name('admin.tag.update');
    });
    Route::group(['prefix' => 'fileupload'], function () {
        Route::get('/', 'Backend\FileUploadController@index')->name('admin.fileupload.index');
        Route::get('/add', 'Backend\FileUploadController@create')->name('admin.fileupload.create');
        Route::post('/store', 'Backend\FileUploadController@store')->name('admin.fileupload.store');
        Route::get('/edit/{slug}', 'Backend\FileUploadController@edit')->name('admin.fileupload.edit');
        Route::post('/edit/{slug}', 'Backend\FileUploadController@update')->name('admin.fileupload.update');
    });
    /**
     * publisher Routes
     */

    /**
     * Country Routes
     */
    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'Backend\PostController@index')->name('post.index');
        Route::get('/add', 'Backend\PostController@create')->name('post.create');
        Route::post('/store', 'Backend\PostController@store')->name('post.store');
        Route::get('/dynamic_category/fetch/{id}', 'Backend\PostController@getSubCategories')->name('dynamic_category.fetchDynamic');
        Route::get('/postList/PostApproved/{id}',  'Backend\PostController@PostApproved')->name('post.PostApproved');
    });
    /**
     * Author Routes
     * 
     */
    Route::group(['prefix' => 'author'], function () {
        Route::get('/', 'Backend\AuthorController@index')->name('admin.author.index');
        Route::get('/add', 'Backend\AuthorController@create')->name('admin.author.create');
        Route::post('/store', 'Backend\AuthorController@store')->name('admin.author.store');
        Route::get('/edit/{slug}', 'Backend\AuthorController@edit')->name('admin.author.edit');
        Route::post('/edit/{slug}', 'Backend\AuthorController@update')->name('admin.author.update');
    });
});
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('admin.auth.logout');

Route::get('/home', 'HomeController@index')->name('home');
