<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);

        return view('post.index', compact('posts'));
    }
}
