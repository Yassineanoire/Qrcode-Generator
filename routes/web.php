<?php
<<<<<<< HEAD
use App\Models\scan;
use App\Http\Controllers\test;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
=======


use App\Http\Controllers\test;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
>>>>>>> 1d19bc00479be9365adf9fd9dae2a08bb8b94c04

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
<<<<<<< HEAD
    return view('welcome1');
=======
    return view('welcome');
>>>>>>> 1d19bc00479be9365adf9fd9dae2a08bb8b94c04
});
Route::get('/qrcode', function () {
    return view('welcome2');
})->name('qrcodee');
<<<<<<< HEAD
Route::get('vue',function(){
    $test=scan::where('id',session('id'))->first();
    if($test)
   return view('vuee',['data'=>$test]);
})->name('vue');
Route::any('login',[test::class,'login'])->name('login');
Route::any('qrcode',[test::class,'direct'])->name('qrcode');
Route::post('store',[test::class,'store'])->name('store');
// Route::get('vue',function(){
// $test=scan::where('id',session::get('id'))->first();
// Session::put('scancount',$test->scan_count);
// });
Route::get('vue/{id}',function($id){
    $test=scan::where('id',$id)->first();
    //  Session::put('scancount',$test->scan_count);
     Session::put('id',$id);
    return redirect()->route('vue');
});
Route::any('/{id}',function ($id){
$test=scan::where('id',$id)->first();
$test->scan_count++;
$test->save();
return redirect()->away('https://'.$test->qr_code);
});
=======

Route::any('login',[test::class,'login'])->name('login');
Route::any('qrcode',[test::class,'direct'])->name('qrcode');
Route::post('store',[test::class,'store'])->name('store');
Route::view('vuee','vuee');
>>>>>>> 1d19bc00479be9365adf9fd9dae2a08bb8b94c04


// Route::get('hh',function () {
//    $users='https://api.beaconstac.com/reporting/2.0/?organization=&method=Products.getPerformance'
 
// dd($users);


