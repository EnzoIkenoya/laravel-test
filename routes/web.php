<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Validation\validatePostcode;


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

Route::get('/', [ContactController::class,'index']);
//問い合わせページ
Route::get('/confirm', [ContactController::class,'confirm']);
Route::post('/confirm', [ContactController::class,'confirm']);
//問い合わせ情報をpostし、一旦DBに格納せず、内容確認のviewに送る
Route::get('/send',[ContactController::class,'send']);
//上記confirmアクションで送られた情報を[送信]ボタンで、DBにcreate=sendアクション→redirectでthanksページ
Route::post('/reverse', [ContactController::class,'reverse']);
//confirmアクションで送られてきた情報を再度問い合わせページに戻す。
Route::post('/thanks',[ContactController::class,'thanks']);
// thanksページへのredirect用rooting→念のためcontrollerを介してthanksページへ遷移するよう設定

//ここからadmin用rooting
Route::get('/admin',[AdminController::class,'admin']);
//管理ページ
Route::get('/search',[AdminController::class,'search']);
Route::get('/reset',[AdminController::class,'reset']);
//  /Adminにredirect
Route::post('/delete',[AdminController::class,'delete']);