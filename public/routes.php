<?php

// Public pages
Route::get('/'			, VIEWS.'home.php');
Route::get('/about'		, VIEWS.'about.php');
Route::get('/trips'		, VIEWS.'trips.php');
Route::get('/register'	, VIEWS.'register.php');
Route::get('/contact'	, VIEWS.'contact.php');

// Email
Route::post('/newsletter' 	,'sendEmail->newsletter');
Route::post('/contactForm' 	,'sendEmail->contact');
Route::post('/registration' ,'sendEmail->registration');

// Admin pages
Route::get('/signin'	, APP.'signin.php');
Route::post('/signin'	, APP.'signin.php');
Route::get('/signout'	, APP.'signout.php');
Route::get('/admin'		, VIEWS.'admin.php');
Route::get('/addTrip'	, VIEWS.'add_trip.php');

// Fallback
Route::fallback(VIEWS.'404.php');
