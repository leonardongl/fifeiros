<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Services\PlayerService;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function rankingHome()
    {
        try {
            return [
                'goals' => PlayerService::goalsRankingHome() ?? null,
                'assists' => PlayerService::assistsRankingHome() ?? null,
                'participations' => PlayerService::participationsRankingHome() ?? null,
                'motm' => PlayerService::motmRankingHome() ?? null
            ];
        } catch (\Exception $e) {
            return false;
        }
    }

    public function find(int $id)
    {
        try {
            return PlayerService::find($id)->toJson() ?? null;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function highlights()
    {
        try {
            return PlayerService::highlights()->toJson() ?? null;
        } catch (\Exception $e) {
            return false;
        }
    }
}
