<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Services\ClubService;
use App\Services\PlayerService;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function list()
    {
        return ClubService::list()->toJson();
    }

    public function find(int $id)
    {
        return ClubService::find($id)->toJson();
    }

    public function ranking()
    {
        return ClubService::ranking()->toJson();
    }

    public function listPlayers(int $id)
    {
        return PlayerService::listByClub($id)->toJson();
    }
}
