<?php

namespace App\Http\Controllers;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = [
            [
                'name' => 'Playing Video Games',
                'image' => 'images/game.png',
            ],
            [
                'name' => 'Reading Manga and Light Novels',
                'image' => 'images/manga.png',
            ],
            [
                'name' => 'Watching Anime',
                'image' => 'images/anime.png',
            ],
        ];

        return view('hobbies', compact('hobbies'));
    }
}
