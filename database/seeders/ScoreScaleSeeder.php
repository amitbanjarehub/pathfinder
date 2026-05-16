<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScoreScaleSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // -------------------------
        // SCORE SCALES
        // -------------------------
        $scales = [
            [ 'id' => 1, 'name' => 'Language Aptitude', 'description' => 'For 8th,9th Standards' ],
            [ 'id' => 2, 'name' => 'Abstract Reasoning', 'description' => 'For 8th,9th Standards' ],
            [ 'id' => 3, 'name' => 'Verbal Aptitude', 'description' => 'For 8th,9th Standards' ],
            [ 'id' => 4, 'name' => 'Mechanical Aptitude', 'description' => 'For 8th,9th Standards' ],
            [ 'id' => 6, 'name' => 'Numerical Aptitude', 'description' => 'For 8th,9th Standards' ],
            [ 'id' => 7, 'name' => 'Spatial Aptitude', 'description' => 'For 8th,9th Standards' ],
            [ 'id' => 8, 'name' => 'Perceptual Aptitude', 'description' => 'For 8th,9th Standards' ],
        ];

        foreach ($scales as &$scale) {
            $scale['created_at'] = $now;
            $scale['updated_at'] = $now;
        }

        DB::table('score_scales')->insert($scales);


        // -------------------------
        // SCORE SCALE RANGES
        // -------------------------
        // These are sten 1–10 score ranges extracted from your sample + Table 11 PDF
        $ranges = [

            // -------------------
            // Language Aptitude (ID:1)
            // -------------------
            [1, 1, 1, 4, 1],
            [1, 5, 6, 2],
            [1, 7, 9, 3],
            [1, 10, 12, 4],
            [1, 13, 15, 5],
            [1, 16, 18, 6],
            [1, 19, 21, 7],
            [1, 22, 24, 8],
            [1, 25, 27, 9],
            [1, 28, 30, 10],

            // -------------------
            // Abstract Reasoning (ID:2)
            // -------------------
            [2, 0, 1, 1],
            [2, 2, 4, 2],
            [2, 5, 7, 3],
            [2, 8, 10, 4],
            [2, 11, 13, 5],
            [2, 14, 16, 6],
            [2, 17, 19, 7],
            [2, 20, 22, 8],
            [2, 23, 25, 9],
            [2, 26, 30, 10],

            // -------------------
            // Verbal Aptitude (ID:3)
            // -------------------
            [3, 0, 3, 1],
            [3, 4, 5, 2],
            [3, 6, 8, 3],
            [3, 9, 11, 4],
            [3, 12, 14, 5],
            [3, 15, 17, 6],
            [3, 18, 20, 7],
            [3, 21, 23, 8],
            [3, 24, 27, 9],
            [3, 28, 30, 10],

            // -------------------
            // Mechanical Reasoning (ID:4)
            // -------------------
            [4, 0, 3, 1],
            [4, 4, 5, 2],
            [4, 6, 8, 3],
            [4, 9, 10, 4],
            [4, 11, 12, 5],
            [4, 13, 14, 6],
            [4, 15, 17, 7],
            [4, 18, 19, 8],
            [4, 20, 21, 9],
            [4, 22, 30, 10],

            // -------------------
            // Numerical Aptitude (ID:6)
            // -------------------
            [6, 1, 3, 1],
            [6, 4, 6, 2],
            [6, 7, 9, 3],
            [6, 10, 12, 4],
            [6, 13, 15, 5],
            [6, 16, 18, 6],
            [6, 19, 22, 7],
            [6, 23, 25, 8],
            [6, 26, 30, 9],
            [6, 31, 40, 10],

            // -------------------
            // Spatial Aptitude (ID:7)
            // -------------------
            [7, 0, 1, 1],
            [7, 2, 4, 2],
            [7, 5, 6, 3],
            [7, 7, 9, 4],
            [7, 10, 11, 5],
            [7, 12, 14, 6],
            [7, 15, 16, 7],
            [7, 17, 19, 8],
            [7, 20, 22, 9],
            [7, 23, 30, 10],

            // -------------------
            // Perceptual Aptitude (ID:8)
            // -------------------
            [8, 0, 9, 1],
            [8, 10, 16, 2],
            [8, 17, 23, 3],
            [8, 24, 30, 4],
            [8, 31, 37, 5],
            [8, 38, 43, 6],
            [8, 44, 50, 7],
            [8, 51, 56, 8],
            [8, 57, 58, 9],
            [8, 59, 60, 10],
        ];

        $insert = [];
        $id = 1;

        foreach ($ranges as $r) {
            $insert[] = [
                'id'            => $id++,
                'score_scale_id'=> $r[0],
                'min_score'     => $r[1],
                'max_score'     => $r[2],
                'sten_score'    => $r[3],
                'created_at'    => $now,
                'updated_at'    => $now,
            ];
        }

        DB::table('score_scale_ranges')->insert($insert);
    }
}
