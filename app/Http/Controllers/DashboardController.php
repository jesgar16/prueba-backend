<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class DashboardController extends Controller
{
    public function index()
    {
        $EndPoint =config('app.end_point');

        $client = new Client([
            'base_uri' => $EndPoint
        ]);

        $response = $client->request('GET', 'awards');
        $rewards = json_decode($response->getBody()->getContents());

        $awards = $this->paginate($rewards);

        return view('dashboard', compact('awards'));
    }

    //paginate array
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
