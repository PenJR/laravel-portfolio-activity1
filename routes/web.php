<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HobbyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/about', function () {
$name = 'John Rio D. Pinatacan'; 
$course = 'Bachelor of Science in Information Technology';
$university = 'Central Mindanao University'; 
$university = 'Central Mindanao University'; 
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
]);
})->name('about');

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');

Route::get('/contact', function () {
$email = 's.pinatacan.johnrio@cmu.edu.ph'; 
$phone = '+63 935 786 4303'; 

return view('contact', [
'email' => $email,
'phone' => $phone
]);
})->name('contact');

Route::get('/hobbies', [HobbyController::class, 'index'])
    ->name('hobbies');
