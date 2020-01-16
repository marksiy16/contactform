<?php
// marksiy\contactform\src\routes\web.php
//Route::get('contact', function(){
//    return 'Hello from the contact form package';
//});

// marksiy\contactform\src\routes\web.php
//Route::get('contact', function(){
//    return view('contactform::contact');
//});
//
//Route::post('contact', function(){
//    // logic goes here
//})->name('contact');

// marksiy\contactform\src\routes\web.php
Route::group(['namespace' => 'marksiy\contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});

?>
