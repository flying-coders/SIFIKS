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

// Route::get('/', 'HomeController@index');
// Route::get('/{id}', 'HomeController@show')->name('display.article');

Route::get('/viewarticle', function() {
    return view('viewarticle');
});

Route::get('/SearchDokter', function() {
    return view('SearchDokter');
});

Route::get('/SearchRS', function() {
    return view('SearchRS');
});

// Route::get('/User', function() {
//     return view('userlayout');
// });

// Route::get('/User/Edit', function() {
//     return view('EditUser');
// })->name('edituser');

Route::get('/listdoctor', function() {
    return view('listDoctor');
});

Route::get('/viewhospital', function() {
    return view('viewhospital');
});

Route::get('/listhospital', function() {
    return view('listHospital');
});

Route::get('/viewdoctor', function() {
    return view('viewDoctor');
});

Route::get('/lihatsemuars', function() {
    return view('LSRumahSakit');
});

Route::get('/lihatsemuadokter', function() {
    return view('LSdoctor');
});

Route::get('/mainsearch-article', function() {
    return view('MainSearchArt');
});

Route::get('/mainsearch-doctor', function() {
    return view('MainSearchDoc');
});

Route::get('/mainsearch-hospital', function() {
    return view('MainSearchHosp');
});

Route::get('/articles/{category}', 'ArticleController@listByCat')->name('list.articles');
Route::get('/articles/{category}/{key}','ArticleController@listByName')->name('listName.articles');
Route::post('/articles/{category}/{cari}','ArticleController@search')->name('cari.articles');

Auth::routes();

// User Privileges =======================================================>
Route::prefix('user')->group( function() {
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::get('/profile/{user}/edit', 'UserController@edit')->name('user.profile.edit');
    Route::put('/profile/{user}/edit', 'UserController@update')->name('user.profile.edit.submit');
    Route::delete('/destroy/me', 'UserController@destroy')->name('user.profile.destroy');
    Route::get('/profile/image/remove', 'UserController@removeImage')->name('user.image.remove');
    Route::get('/profile/password/{user}/edit', 'UserController@editPass')->name('user.password.edit');
    Route::put('/profile/password/{user}/edit', 'UserController@updatePass')->name('user.password.edit.submit');
});
Route::resource('user', 'UserController')->except([
    'show', 'index', 'profile', 'edit', 'update', 'editPass', 'updatePass', 'destroy'
]);
Route::get('/article/{article}', 'UserController@showArticle')->name('user.article.show');
Route::get('/', 'UserController@index')->name('home');
// END-OF
// User Privileges ======================================================>


// Admin Privileges ======================================================>
Route::prefix('admin')->group( function() {
    // Authentication -->
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    // Admin Controller -->
    Route::get('/profile/{admin}', 'AdminController@profile')->name('admin.profile');
    Route::get('/profile/{admin}/edit', 'AdminController@editProfile')->name('admin.profile.edit');
    Route::put('/profile/{admin}/edit', 'AdminController@updateProfile')->name('admin.profile.edit.submit');
    Route::get('/profile/password/{admin}/edit', 'AdminController@editPass')->name('admin.password.edit');
    Route::put('/profile/password/{admin}/edit', 'AdminController@updatePass')->name('admin.password.edit.submit');
    Route::get('/profile/image/remove', 'AdminController@removeImage')->name('admin.image.remove');
    Route::delete('destroy/me', 'AdminController@destroy')->name('admin.profile.destroy');
    Route::resource('admin', 'AdminController')->except([
        'profile', 'editProfile', 'editPass'
    ]);
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

    //Resourced Controller -->
    Route::resources([
        'member' => 'MemberController',
        'doctor' => 'DoctorController',
        'specialty' => 'SpecializationController',
        'article' => 'ArticleController',
        'hospital' => 'HospitalController',
        'thread' => 'ThreadController',
    ]);

    //Hospital's Rooms Controller -->
    Route::get('/room/{room_id}/{hospital_id}/edit', 'RoomController@edit')->name('room.edit');
    Route::get('/room/{hospital_id}/room/add', 'RoomController@create')->name('room.create');
    Route::delete('/room/{room_id}/{hospital_id}/destroy', 'RoomController@destroy')->name('room.destroy');
    Route::get('/room/{room_id}/{hospital_id}', 'RoomController@show')->name('room.show');
    Route::resource('room', 'RoomController')->except([
        'edit', 'create', 'destroy', 'show'
    ]);

    // Home
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
});
// END-OF
// Admin Privileges ======================================================>


// Doctor Privileges ======================================================>
Route::prefix('doctor')->group( function() {
    // Authentication -->
    Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
    Route::post('/login', 'Auth\DoctorLoginController@login')->name('doctor.login.submit');

    // Article Access -->
    Route::resources([
        'article' => 'ArticleController',
        'thread' => 'ThreadController'
    ]);


    // Doc Controller -->



    // Home -->
    Route::get('/', 'DocController@dashboard')->name('doc.dashboard');
});
// END-OF
// Doctor Privileges ======================================================>


// Socialite Open-Authentication
Route::get('oauth/{provider}', 'Auth\OAuthController@redirectToProvider')->name('api.login');
Route::get('oauth/{provider}/callback', 'Auth\OAuthController@handleProviderCallback')->name('api.login.submit');


Route::get('/ask', function() {
    return view('AskToDoctor');
});
Route::get('/ask-detail', function() {
    return view('DetailQuestions');
});

Route::get('/admin/profile/article', function() {
    return view('/pages/ext/profile-articles');
});
Route::get('/admin/profile/edit', function() {
    return view('/pages/ext/edit-profile');
});
Route::get('/admin/profile/password', function() {
    return view('/pages/ext/edit-password');
});




