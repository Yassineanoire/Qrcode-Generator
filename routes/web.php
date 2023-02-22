<?php


use App\Http\Controllers\test;
use Illuminate\Support\Facades\Http;
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
    return view('welcome');
});
Route::get('/qrcode', function () {
    return view('welcome2');
})->name('qrcodee');

Route::any('login',[test::class,'login'])->name('login');
Route::any('qrcode',[test::class,'direct'])->name('qrcode');
Route::post('store',[test::class,'store'])->name('store');
Route::view('vuee','vuee');


// Route::get('hh',function () {
//    $users='https://api.beaconstac.com/reporting/2.0/?organization=&method=Products.getPerformance'
 
// dd($users);


