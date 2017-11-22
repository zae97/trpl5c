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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
// Authentication Routes...
 Route::get('login', 'Auth\LoginController@showLoginForm')->name('login'); //menampilkan login form
 Route::post('login', 'Auth\LoginController@login'); //verifikasi login benar atau tidak 
 Route::post('logout', 'Auth\LoginController@logout')->name('logout'); //logout


 // Password Reset Routes...
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request'); 
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email'); // 
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset'); //
 Route::post('password/reset', 'Auth\ResetPasswordController@reset');





Route::get('/home2', function(){//user
  return view('home2');//halaman home pelamar
});

Route::get('/home', 'HomeController@index')->name('home');//home admin

  //route2 yg ada disini harus login sbg admin
  Route::group(['middleware'=>['auth']],function()  { 
  Route::resource('pegawai','PegawaiController');
  Route::post('pegawai-update','PegawaiController@pegawaiupdate')->name('pegawai-update');//update data pegawai
  Route::resource('jabatan','JabatanController');
  Route::post('jabatan-update','JabatanController@jabatanupdate')->name('jabatan-update');
  Route::resource('pelamar','PelamarController');
  Route::resource('kategori','KategoriController');
  Route::resource('soal','SoalController');
  Route::resource('dicari','dicariController');
  Route::resource('rangking','RangkingController');
  Route::put('edit2/{id}','RangkingController@edit2')->name('edit2');
  Route::post('edit2/{id}','RangkingController@edit2')->name('edit2');
  Route::get('edit2/{id}','RangkingController@edit2')->name('edit2');
  Route::resource('kriteria','KriteriaController');
  Route::post('kriteria-update','KriteriaController@kriteriaupdate')->name('kriteria-update');
  Route::post('kriteria-simpan','KriteriaController@kriteriasimpan')->name('kriteria-simpan');


  // Registration Routes...
  Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'Auth\RegisterController@register');

});



 //route2 yg ada disini harus login sbg pelamar
Route::group(['middleware' => 'user_guest'], function() {

Route::get('user_register', 'UserAuth\RegisterController@showRegistrationForm');
Route::post('user_register', 'UserAuth\RegisterController@register');
Route::get('user_login', 'UserAuth\LoginController@showLoginForm');
Route::post('user_login', 'UserAuth\LoginController@login');

});

Route::group(['middleware' => 'user_auth'], function(){
  Route::resource('soalpelamar','SoalPelamarController');
  Route::resource('hasil','HasilController');


Route::post('user_logout', 'UserAuth\LoginController@logout');
Route::get('/user_home', function(){
  return view('user.home');
});
// Route::get('/user_home2', function(){
//   return view('backend.pelamar.home2');
// });

});


Route::resource('tests', 'TestsController');
// Route::resource('roles', 'RolesController');
// Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
// Route::resource('users', 'UsersController');
// Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
// Route::resource('user_actions', 'UserActionsController');
Route::resource('topics', 'TopicsController');
Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
Route::resource('questions', 'QuestionsController');
Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
Route::resource('questions_options', 'QuestionsOptionsController');
Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
Route::resource('results', 'ResultsController');
Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);
