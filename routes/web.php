<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'tags' => Tag::get()
    ]);
});
