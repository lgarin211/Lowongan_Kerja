<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;






Auth::routes();

// Home
Route::get('/', function () {
    return view('welcome');
});


// Route Pendaftaran

Route::get('/form-pendaftaran', 'PelamarsController@create');

Route::post('/form-pendaftaran', 'PelamarsController@store')->name('pelamars.store');

// Route About



// Route::get('/pelamar', 'PelamarsController')->names('pelamar');

Route::group(['middleware' => 'auth'], function () {

    // admin
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/pelamars', 'AdminController@index')->name('admin.index');

    Route::get('/data-pelamar/{pelamar}', 'AdminController@show')->name('admin.show');

    Route::delete('/data-hapus/{pelamar}', 'AdminController@destroy')->name('admin.destroy');

    Route::get('/pelamar/contact', 'AdminController@contact')->name('admin.contact');

    // Cetak PDF
    Route::get('/data-pelamar/{pelamar}/cetak', 'AdminController@cetak')->name('admin.cetak');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
