<?php

namespace App\Services;

use App\Models\Player;
use Illuminate\Support\Facades\Log;
use Throwable;

class PlayerService
{
    public static function list()
    {
        try {
            return Player::all();
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function listByClub(int $id)
    {
        try {
            return Player::where('club_id', $id)->get();
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function goalsRankingHome()
    {
        try {
            return Player::where('goals', '>', 0)
                ->select('id as id', 'name as name', 'goals as value')
                ->orderByDesc('goals')
                ->get(5);
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function assistsRankingHome()
    {
        try {
            return Player::where('assists', '>', 0)
            ->select('id as id', 'name as name', 'assists as value')
            ->orderByDesc('assists')
            ->get(5);
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function motmRankingHome()
    {
        try {
            return Player::where('motm', '>', 0)
            ->select('id as id', 'name as name', 'motm as value')
            ->orderByDesc('motm')
            ->get(5);
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function highlights()
    {
        try {
            return Player::where('rating', '>', '7')
            ->get()
            ->random(5);
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
            return Player::find($id);
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }
}
