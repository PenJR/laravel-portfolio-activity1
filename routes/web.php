<?php

use Illuminate\Support\Facades\Route;

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
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
]);
})->name('about');

Route::get('/projects', function () {
$projects = [
['title' => 'Dormatory Management System', 'description' => 'Web Application for Dormitory Management'],
['title' => 'PickMeUp', 'description' => 'Mobile App for Motorela-Hailing Service'],
['title' => 'SpellCode', 'description' => 'Currently Developing Capstone Project'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
$email = 's.pinatacan.johnrio@cmu.edu.ph'; 
$phone = '+63 935 786 4303'; 

return view('contact', [
'email' => $email,
'phone' => $phone
]);
})->name('contact');
