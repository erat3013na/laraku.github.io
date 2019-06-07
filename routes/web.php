<?php

Route::get('/', function () {
    return view('welcome');
});

//latihan 1 sekaligus dijadikan fondasi latihan ke 3
Route::get('test1/{name?}', function ($name = 'Guest') {
    return view('test1', ['name'=> $name]);
});

//latihan ke 2
Route::get('test2/{nama?}', 'Test2@index');

//latihan ke 3
Route::get('test3', 'Test3@index');
Route::post('test3/proses','Test3@noobinsert');
Route::get('test3/tampilkan', 'Test3@tampilkan');
Route::get('test3/develop', 'Test3@onlydd');

//24 mei 2019
Route::get('test3/lihat','Test3@lihat');
Route::post('test3/lihat','Test3@perlihatkan');

Route::post('test3/edit','Test4@update');
Route::post('test4/updateProses', 'Test4@updateProcess');
Route::post('test3/hapus','Test4@deleteAKey');


/*______________
 | Eloquent ORM |
 |______________|
*/

// Create
Route::get('test4', 'Test4@index');
Route::post('test4/create', 'Test4@create');

////  Read
// All
Route::get('test4/readAll','Test4@readAll');
////  Search
Route::get('test4/read','Test4@readView');
Route::post('test4/read','Test4@read');

//// Update
Route::post('test4/updateView', 'Test4@updateView');
Route::post('test4/update', 'Test4@update');

Route::get('test4/readnilai', 'Test4@readNilai');

Route::post('test4/pembimbing', 'Test4@pembimbing');

Route::resource('test5', 'Test4');
