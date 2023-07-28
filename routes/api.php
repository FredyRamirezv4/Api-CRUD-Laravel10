<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

//esto es una API pública, no necesita login o autorización

Route::resource('/note',NoteController::class);