<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questions;
USE App\Models\Categories;

class QuestionController extends Controller{
    public function getCategories() {
        return Categories::get();
    }

    public function getRandomCategory() {
        return Categories::inRandomOrder()
            ->first();
    }

    public function getRandomQuestionFromCategory(int $categoryId) {
        return Questions::where('category_id', $categoryId)
            ->inRandomOrder()
            ->first()->makeHidden(['answer']);
    }

    public function getRandomQuestion(?string $answer = null) {
        if($answer){
            return Questions::inRandomOrder()->first();
        }

        return Questions::inRandomOrder()->first()->makeHidden(['answer']);
    }

    public function getAnswer(int $questionId) {
        return Questions::select('question', 'answer')->where('id', $questionId)->first();
    }
}
