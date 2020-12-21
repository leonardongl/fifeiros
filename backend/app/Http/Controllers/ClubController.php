<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Services\ClubService;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        return ClubService::list()->toJson();
    }

    public function ranking()
    {
        return ClubService::ranking()->toJson();
    }

    public function find(int $id)
    {
        return ClubService::find($id)->toJson();
    }
}
