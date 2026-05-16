<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;
use App\Models\Section;
use App\Models\Part;
use App\Models\Question;
use App\Models\Option;
use App\Models\TestPrice;
use Str;

class PathfinderTestSeeder extends Seeder
{
    public function run()
    {
        // ---------------------------------------------------------
        // 1. Create the MAIN TEST
        // ---------------------------------------------------------
        $test = Test::create([
            'title'       => 'Pathfinder Aptitude Test',
            'slug'        => 'pathfinder-aptitude-test',
            'description' => 'A multi–parameter career aptitude test containing LA, AR, VR, MR, NA, SA & PA sections.',
            'type'        => 'aptitude',
            'code'        => 'PF-' . strtoupper(Str::random(6)),
            'is_active'   => true,
        ]);

        // ---------------------------------------------------------
        // 2. Define the SECTIONS with their time limits (10 mins)
        // Extracted from PDF: each test is 10 mins per section.
        // ---------------------------------------------------------
        $sections = [
            ['title' => 'Language Aptitude (LA)',        'time_limit' => 10],
            ['title' => 'Abstract Reasoning (AR)',        'time_limit' => 10],
            ['title' => 'Verbal Reasoning (VR)',          'time_limit' => 10],
            ['title' => 'Mechanical Reasoning (MR)',      'time_limit' => 10],
            ['title' => 'Numerical Aptitude (NA)',        'time_limit' => 10],
            ['title' => 'Spatial Ability (SA)',           'time_limit' => 10],
            ['title' => 'Perceptual Aptitude (PA)',       'time_limit' => 10],
        ];

        foreach ($sections as $index => $s) {

            $section = Section::create([
                'test_id'     => $test->id,
                'title'       => $s['title'],
                'description' => null,
                'time_limit'  => $s['time_limit'],
                'order'       => $index + 1,
            ]);

            // -----------------------------------------------------
            // 3. Each section contains PARTS
            // Based on PDF structure:
            // LA → Part I, II, III
            // VR → Part I, II
            // SA → Part I, II
            // Others → Single part
            // -----------------------------------------------------
            $parts = match ($s['title']) {
                'Language Aptitude (LA)' => ['Part I', 'Part II', 'Part III'],
                'Verbal Reasoning (VR)'  => ['Part I', 'Part II'],
                'Spatial Ability (SA)'   => ['Part I', 'Part II'],
                default                  => ['Part I'],
            };

            foreach ($parts as $pIndex => $pTitle) {

                $part = Part::create([
                    'section_id'  => $section->id,
                    'title'       => $pTitle,
                    'description' => null,
                    'order'       => $pIndex + 1,
                ]);

                // -------------------------------------------------
                // 4. Insert placeholder questions
                // (Later you will import real questions)
                // -------------------------------------------------

                // Determine question count from PDF:
                $questionCount = match ($s['title']) {
                    'Perceptual Aptitude (PA)' => 60,
                    'Spatial Ability (SA)'     => ($pTitle === 'Part I' ? 20 : 10),
                    default                    => 30,
                };

                for ($q = 1; $q <= $questionCount; $q++) {

                    $question = Question::create([
                        'part_id'       => $part->id,
                        'question_text' => "Placeholder question {$q} for {$s['title']} - {$pTitle}",
                        'question_type' => 'mcq',
                        'marks'         => 1,
                        'order'         => $q,
                    ]);

                    // 4 Options
                    $optionLabels = ['A', 'B', 'C', 'D'];

                    foreach ($optionLabels as $oIndex => $label) {
                        Option::create([
                            'question_id' => $question->id,
                            'option_text' => "Option {$label} for question {$q}",
                            'is_correct'  => $oIndex === 0, // Make option A correct for now
                            'order'       => $oIndex + 1,
                        ]);
                    }
                }
            }
        }

        // ---------------------------------------------------------
        // 5. Seed PRICES for 4 user roles
        // ---------------------------------------------------------
        $prices = [
            'student'     => 4999,
            'counsellor'  => 599,
            'professional'=> 999,
            'institution' => 1999,
        ];

        foreach ($prices as $role => $price) {
            TestPrice::create([
                'test_id'  => $test->id,
                'role'     => $role,
                'price'    => $price,
                'currency' => 'INR',
            ]);
        }

        echo "Pathfinder Test + Sections + Parts + Questions + Options Seeded Successfully.\n";
    }
}
