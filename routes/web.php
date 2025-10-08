<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController; //import HomeController
use App\Http\Controllers\ProfileController; //import ProfileController
use App\Http\Controllers\ContactController; //import ContactController
use App\Http\Controllers\StudentsController; //import ContactController
use App\Http\Controllers\TeacherController; //import ContactController

Route::get('/', [ProfilController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);


