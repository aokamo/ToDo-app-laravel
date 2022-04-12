<?php

use Illuminate\Support\Facades\Route;

// フォルダ一覧ページを表示
Route::get('/folders/{id}/tasks'. 'TaskController@index')->name('tasks.index');