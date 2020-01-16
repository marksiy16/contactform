<?php
// MyVendor\contactform\src\routes\web.php
//Route::get('contact', function(){
//    return 'Hello from the contact form package';
//});

// MyVendor\contactform\src\routes\web.php
//Route::get('contact', function(){
//    return view('contactform::contact');
//});
//
//Route::post('contact', function(){
//    // logic goes here
//})->name('contact');

// MyVendor\contactform\src\routes\web.php
Route::group(['namespace' => 'MyVendor\contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});

?>
