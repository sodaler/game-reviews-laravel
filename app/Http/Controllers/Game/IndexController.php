<?php

namespace App\Http\Controllers\Game;

use App\Components\ImportGameData;
use App\Http\Controllers\Controller;
use App\Jobs\IndexGame;
use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;


class IndexController extends Controller
{
    public function __invoke()
    {
        try {
            $import = new ImportGameData();
            $response = $import->client->request('get', '?sort-by=popularity',[
                'headers' => [
                    'X-RapidAPI-Key' => '7e1d60c8c9mshe8a4ac267960c8ep197936jsncbef41f1c80b',
                    'X-RapidAPI-Host' => 'free-to-play-games-database.p.rapidapi.com'
                ]
            ]);

            $data = json_decode($response->getBody()->getContents());
            $array = array_slice((array)$data, 0, 10);
            $topGames = $this->paginate($array);
            return view('game.index', compact('topGames'));
        } catch (\Exception $exception) {
            abort(404);
        }
    }

    public function paginate($items, $perPage = 8, $page = null, $options = [
        'path'  => '/games',
        ])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
