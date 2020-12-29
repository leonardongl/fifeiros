<?php

namespace App\Services;

use App\Models\Club;
use Illuminate\Support\Facades\Log;
use Throwable;

class ClubService
{
    public static function list()
    {
        try {
            return Club::all();
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function find(int $id)
    {
        try {
            return Club::find($id);
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function store(array $data)
    {
        try {
            $data['img'] = 'clubs/default.png';
            return Club::create($data);
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function ranking()
    {
        try {
            return Club::all()->sortBy('points')->take(4);
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }
}
