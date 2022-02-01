<?php


/*********** GUEST ROUTES **********/
Route::get('/', 'Guest\IndexController@index')->name('guest.index');


Route::get('/rolunk', 'Guest\IndexController@about')->name('about.index');
Route::get('/badogozasi-munkak', 'Guest\IndexController@badoging')->name('badoging.index');
Route::get('/tetofedes', 'Guest\IndexController@roof_covering')->name('roof-covering.index');
Route::get('/szigeteles', 'Guest\IndexController@szigeteles')->name('roof-reparing.index');
Route::get('/kapcsolat', 'Guest\ContactController@index')->name('contact.index');


Route::get('/kapcsolat', 'Guest\Contact\ContactController@index')->name('contact.index');
Route::post('/kapcsolat-felvetel', 'Guest\Contact\ContactController@store')->name('contact.store');

Route::get('/koszonjuk', 'Guest\IndexController@thanks')->name('thanks.index');


Route::post('/contact-by-phone', 'Guest\Contact\ContactController@contact_by_phone')->name('contact_by_phone');













