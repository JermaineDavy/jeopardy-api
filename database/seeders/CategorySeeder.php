<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $json = Storage::disk('local')->get('/jeopardy_categories.json');
        
        $categories = json_decode($json, true);

        Categories::insert($categories);
    }
}
