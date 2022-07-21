<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::paginate(6);
        $firstCategory = DB::table('categories')->whereNotNull('id')->first();
        return view('category.index', compact('categories', 'firstCategory'));
    }
}
