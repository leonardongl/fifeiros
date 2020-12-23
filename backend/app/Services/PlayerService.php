<?php

namespace App\Services;

use App\Models\Player;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class PlayerService
{
    public static function list(): ?Collection
    {
        try {
            return Player::all() ?? null;
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function listByClub(int $id): ?Collection
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

    public static function goalsRankingHome(): ?Collection
    {
        try {
            return Player::where('goals', '>', 0)
                ->select('id as id', 'name as name', 'goals as value')
                ->orderByDesc('goals')
                ->get()->take(5) ?? null;
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function participationsRankingHome(): ?Collection
    {
        try {
            return Player::where('goals', '>', 0)
            ->orWhere('assists', '>', 0)
            ->select(
                'id as id',
                'name as name',
                'goals as goals',
                'assists as assists',
                DB::raw('(goals + assists) as value')
            )
            ->orderByDesc('value')
            ->get()->take(5) ?? null;
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function assistsRankingHome(): ?Collection
    {
        try {
            return Player::where('assists', '>', 0)
                    ->select('id as id', 'name as name', 'assists as value')
                    ->orderByDesc('assists')
                    ->get()->take(5) ?? null;
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function motmRankingHome(): ?Collection
    {
        try {
            return Player::where('motm', '>', 0)
            ->select('id as id', 'name as name', 'motm as value')
            ->orderByDesc('motm')
            ->get()->take(5) ?? null;
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function highlights(): ?Collection
    {
        try {
            return Player::where('rating', '>', '7')
            ->orderByDesc('rating')
            ->get()->take(5) ?? null;
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }

    public static function find(int $id): ?Player
    {
        try {
            return Player::find($id) ?? null;
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }
}
