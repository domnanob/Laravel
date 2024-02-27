<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function show($title) {
        $tomb = ["elso", "masodik","harmadik"];
        return view('post',[
            "title" => $tomb[$title] ?? abort(404),
            "length" => Post::getLength($tomb[$title])
        ]);;
    }
}
