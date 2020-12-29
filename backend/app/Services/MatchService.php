<?php

namespace App\Services;

use App\Models\Match;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class MatchService
{
    public static function list()
    {
        try {
            return Match::all();
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
            DB::beginTransaction();
            Log::info($data);

            $match['home_id'] = $data['home_id'];
            $match['away_id'] = $data['away_id'];
            $match['home_score'] = $data['home_goals'];
            $match['away_score'] = $data['home_goals'];

            $match = Match::create($match);

            foreach ($data as $item) {
                $table->unsignedBigInteger('player_id');
                $table->unsignedBigInteger('match_id');
                $table->integer('matches')->default(0);
                $table->integer('goals')->default(0);
                $table->integer('assists')->default(0);
                $table->boolean('motm')->default(false);
                $table->float('rating')->default(0);


                if () {

                }
                $matchPlayer =
            }


            return [];
        } catch (Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'line' => $th->getLine(),
                'file' => $th->getFile(),
            ]);
        }
    }
}
