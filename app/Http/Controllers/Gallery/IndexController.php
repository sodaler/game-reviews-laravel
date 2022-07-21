<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6, ['*'], 'posts');
        $categories = Category::paginate(8, ['*'], 'categories');
        return view('gallery.index', compact('posts', 'categories'));
    }

}
