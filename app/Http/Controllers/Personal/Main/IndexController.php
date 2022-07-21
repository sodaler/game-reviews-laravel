<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $commentsCount = auth()->user()->comments->count();
        $likesCount = auth()->user()->likedPosts->count();
        return view('personal.main.index', compact('commentsCount', 'likesCount'));
    }
}
