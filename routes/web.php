<?php

use Illuminate\Support\Facades\Route;
use App\Models\Not_achieved_task;
use Illuminate\Http\Request;

/**
 * 表示のテスト
 */
Route::get('ta', function () {
    return '<html><body><h1>task</h1></body></html>';
});

/**
 * 登録画面
 */
Route::get('/', 'App\Http\Controllers\Controller@registerShow');

/**
 * 登録処理
 */
Route::post('/register', 'App\Http\Controllers\Controller@register');

/**
 * タスクの削除
 */
Route::delete('/task/{task}', function (Not_achieved_task $not_achieved_task) {
    //
});

/**
 * 未達成タスクの表示画面
 */
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/**
 * 編集画面
 */
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/**
 * 編集処理
 */
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/**
 * 達成タスクの表示画面
 */
/*
Route::get('/', function () {
    return view('welcome');
});
*/
