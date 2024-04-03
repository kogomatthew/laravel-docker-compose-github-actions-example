<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactsController;

Route::resource('contacts', ContactsController::class);  

Route::redirect('/', '/contacts');