<?php

namespace Database\Seeders;

use App\Models\Questions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class QuestionsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $json = Storage::disk('local')->get('/jeopardy_questions.json');

        $questions = json_decode($json, true);

        $questionChunks = array_chunk($questions, 1000);

        foreach($questionChunks as $chunk) {
            Questions::insert($chunk);
        }
    }
}
