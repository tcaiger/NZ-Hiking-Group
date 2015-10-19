<?php # Restful API


// ======= USER ROUTES ==============
Route::get('/users'		,'userController->readUsers');
Route::post('/users'	,'userController->createUser');

// ======= TRIP ROUTES ==============
Route::get('/trips'			,'tripController->readTrips');
Route::post('/trips'		,'tripController->createTrip');
Route::get('/trips/:id'		,'tripController->readTrip');
Route::post('/trips/:id'	,'tripController->updateTrip');
Route::delete('/trips/:id'	,'tripController->deleteTrip');

// ======= Registration ROUTES ==============
Route::get('/registrations'		,'registrationController->readRegistrations');
Route::post('/registrations'	,'registrationController->createRegistration');

// ======= Board ROUTES ==============
Route::get('/board'		,'boardController->readBoard');

Route::fallback(VIEWS.'/404.php');



