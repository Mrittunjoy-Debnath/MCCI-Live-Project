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

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//admin
Route::get('/admin/home', 'HomeController@adminIndex')->name('admin.home')->middleware('is_admin');

// Route::get('/', function () {
//     // return view('welcome');
//     return view('auth.login');

// });

Route::get('/deposit','AccountController@deposit')->name('deposit')->middleware('auth');

Route::get('/vip','AccountController@vip')->name('vip')->middleware('auth');

Route::get('/cash','AccountController@cash')->name('cash')->middleware('auth');

Route::get('/service','AccountController@service')->name('service')->middleware('auth');
// Route::get('/','HomeController@login');

// Auth::routes();


Route::get('/task','AccountController@task')->name('task')->middleware('auth');

Route::get('/youtube','AccountController@youtube')->name('youtube')->middleware('auth');

Route::get('/twitter','AccountController@twitter')->name('twitter')->middleware('auth');

Route::get('/others','AccountController@others')->name('others')->middleware('auth');

Route::get('/front-end/other/page2','AccountController@other')->name('other')->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/me', 'AccountController@me')->name('me')->middleware('auth');

//admin
// Route::get('/admin/home', 'AdminController@index')->name('home.admin');

// Route::get('admin','Admin\LoginController@showLoginForm')->name('login.admin');

// Route::post('admin','Admin\LoginController@login');

//email

Route::get('/show/email','EmailController@index')->name('show-email')->middleware('is_admin');

Route::get('/manage/email','EmailController@showEmail')->name('manage-email')->middleware('is_admin');

// Route::delete('/email/delete/{$id}','EmailController@emailDelete')->name('delete-item');

//delete
Route::delete('/manage/email/{id}','EmailController@destroy')->name('user.destroy');

//manage invest
Route::get('/invest','InvestController@index')->name('manage-invest')->middleware('is_admin');
Route::post('/invest/done','InvestController@investDone')->name('invest-done');

Route::get('/daily/income','InvestController@showIncome')->name('show-income')->middleware('is_admin');

// show and delete invest,income
Route::delete('/invest/delete/{id}','InvestController@destroy')->name('invest.destroy');


//save money

Route::post('/savemoney','MoneyController@saveMoney')->name('save-money');

//deposit
Route::get('/depositmoney','MoneyController@showDiposit')->name('manage-deposit')->middleware('is_admin');
Route::delete('/diposit/delete/{id}','MoneyController@destroy')->name('diposit.destroy');

//person details
Route::get('/person/detais','MoneyController@personDetails')->name('person-details')->middleware('is_admin');
Route::delete('/person/delete/{id}','MoneyController@personDestroy')->name('screenshoot.destroy');

//lebel && task
Route::get('/level','LevelController@index')->name('level-task')->middleware('is_admin');
Route::post('/level/done/{id}','LevelController@done')->name('level-done');

//Task
Route::get('/address','TaskController@index')->name('name.address');
Route::post('/saveaddress','TaskController@saveAddress')->name('save-address');

Route::get('/taskforall','TaskController@taskAll')->name('task-all')->middleware('is_admin');
Route::post('/addtask','TaskController@addTask')->name('add-task')->middleware('is_admin');

Route::get('/receivetask','TaskController@receiveTask')->name('receive-task')->middleware('auth');
Route::get('/managetask','TaskController@manageTask')->name('manage-task')->middleware('is_admin');

Route::delete('/task/delete/{id}','TaskController@destroy')->name('managetask.destroy');
Route::get('/totalincome','TaskController@totalIncome')->name('total.income')->middleware('auth');

//screenshoot
Route::post('/schreenshoot/done','SchreenshootController@schreenshootDone')->name('screenshot-done');


// BankAccount
Route::get('/bank/account','TaskController@bankAccount')->name('bank.account')->middleware('auth');
//withdraw
Route::get('/withdraw','TaskController@withdraw')->name('task.withdraw')->middleware('auth');


Route::post('/withdraw/amount','TaskController@withdrawAmount')->name('withdraw-amount');

//Withdraw admin
Route::get('/withdraw/person','Admin\TaskController@index')->name('task-withdraw')->middleware('is_admin');
Route::delete('/withdraw/destroy/{id}','Admin\TaskController@destroy')->name('withdraw.destroy');
Route::get('/withdraw/balance/{id}','Admin\TaskController@withdraw')->name('user.withdraw')->middleware('is_admin');
Route::post('/withdraw/confirm/{id}','Admin\TaskController@confirm')->name('withdraw-admin');

//invite friends
Route::get('/invite','TaskController@invite')->name('invite.friends')->middleware('auth');
