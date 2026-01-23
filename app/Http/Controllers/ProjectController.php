<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'Dormatory Management System',
                'description' => 'Web Application for Dormitory Management',
                'image' => 'images/dorm.png',
            ],
            [
                'title' => 'CISC Student Hub',
                'description' => 'App for our Class Project - I worked for the front end developer for 2 modules',
                'image' => 'images/hub.png',
            ],
            [
                'title' => 'SpellCode',
                'description' => 'Currently Developing Capstone Project',
                'image' => 'images/spellcode.png',
            ],
        ];

        return view('projects', compact('projects'));
    }
}
