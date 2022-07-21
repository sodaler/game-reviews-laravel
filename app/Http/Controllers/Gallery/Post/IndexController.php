<?php

namespace App\Http\Controllers\Gallery\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(4);
        return view('gallery.post.index', compact('posts', 'category'));
    }
}
