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

// 리스트 이동
Route::get('/boards','BoardController@index');
// 글쓰기 폼으로 이동
Route::get('/board/create','BoardController@create');
// 글쓰기 - process
Route::post('/boards','BoardController@store');
// 상세보기
Route::get('/boards/{board}','BoardController@show');
// 수정하기 페이지
Route::get('/boards/{board}/edit','BoardController@edit');
// 수정 - process
Route::put('/boards/{board}','BoardController@update');
// 삭제
Route::delete('/board/{board}','BoardController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
