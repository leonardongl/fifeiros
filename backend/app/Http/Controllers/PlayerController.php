<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Services\PlayerService;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function rankingHome()
    {
        return [
            'goals' => PlayerService::goalsRankingHome(),
            'assists' => PlayerService::assistsRankingHome(),
            'motm' => PlayerService::motmRankingHome()
        ];
    }

    public function find(int $id)
    {
        return PlayerService::find($id)->toJson();
    }

    public function highlights()
    {
        return PlayerService::highlights()->toJson();
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
