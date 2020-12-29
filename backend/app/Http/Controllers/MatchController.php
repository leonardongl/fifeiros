<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Services\MatchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MatchController extends Controller
{
    public function index()
    {
        return MatchService::list();
    }

    public function store(Request $request)
    {
        return MatchService::store($request->data);
    }
}
