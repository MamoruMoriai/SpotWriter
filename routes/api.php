<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/spots', 'SpotController@index');                       // 一覧 + 検索
Route::get('/spots/{id?}', 'SpotController@show');                   // 詳細
Route::post('/spots', 'SpotController@create');                     // 登録
Route::post('/spots/{id?}', 'SpotController@update');                // 更新
Route::post('/spots/{id?}', 'SpotController@delete');                // 削除
// Route::put('/spots/{id}', 'SpotController@update');
// Route::delete('/spots/{id}', 'SpotController@delete');

Route::get('/notices', 'NoticeController@index');                    // 一覧
Route::get('/notices/{id?}', 'NoticeController@show');               // 詳細
Route::post('/notices', 'NoticeController@create');                  // 登録
Route::post('/notices/{id?}', 'NoticeController@update');            // 更新
Route::post('/notices/{id?}', 'NoticeController@delete');            // 削除
// Route::put('/notices/{id}', 'NoticeController@update');
// Route::delete('/notices/{id}', 'NoticeController@delete');

Route::get('/terminologies', 'TerminologyController@index');         // 一覧
Route::get('/terminologies/{id?}', 'TerminologyController@show');    // 詳細
Route::post('/terminologies', 'TerminologyController@create');       // 登録
Route::post('/terminologies/{id?}', 'TerminologyController@update'); // 更新
Route::post('/terminologies/{id?}', 'TerminologyController@delete'); // 削除
// Route::put('/terminologies/{id}', 'TerminologyController@update');
// Route::delete('/terminologies/{id}', 'TerminologyController@delete');

Route::get('/techniques', 'TechniqueController@index');              // 一覧
Route::get('/techniques/{id?}', 'TechniqueController@show');         // 詳細
Route::post('/techniques', 'TechniqueController@create');            // 登録
Route::post('/techniques/{id?}', 'TechniqueController@update');      // 更新
Route::post('/techniques/{id?}', 'TechniqueController@delete');      // 削除
// Route::put('/techniques/{id}', 'TechniqueController@update');
// Route::delete('/techniques/{id}', 'TechniqueController@delete');

Route::get('/skaters', 'SkaterController@index');                    // 一覧
Route::get('/skaters/{id?}', 'SkaterController@show');               // 詳細
Route::post('/skaters', 'SkaterController@create');                  // 登録
Route::post('/skaters/{id?}', 'SkaterController@update');            // 更新
Route::post('/skaters/{id?}', 'SkaterController@delete');            // 削除
// Route::put('/skaters/{id}', 'SkaterController@update');
// Route::delete('/skaters/{id}', 'SkaterController@delete');
