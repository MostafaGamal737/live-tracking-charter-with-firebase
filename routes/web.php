<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\admin;
use Spatie\Analytics\Period;


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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@show')->middleware(admin::class);
Route::post('/admin/Ubdate', 'AdminController@Ubdate')->middleware(admin::class);
Route::get('/', function(){
$an =$analyticsData = Analytics::performQuery(
   Period::years(1),
      'ga:sessions',
      [
          'metrics' => 'ga:sessions, ga:pageviews',
          'dimensions' => 'ga:yearMonth'
      ]
);
//$da=Analytics::fetchMostVisitedPages(Period::days(7));
dd($an);
  return view("welcome");
});
//-------------firebaseController----------------
Route::get('/getdata', 'firebaseController@get');
Route::get('/set', 'firebaseController@set');
Route::get('/update', 'firebaseController@update');
