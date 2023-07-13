<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Questions extends Model {
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'category',
        'air_date',
        'question',
        'value',
        'answer',
        'round',
        'show_number'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected function value(): Attribute {
        return Attribute::make(
            set: fn(?string $value) => ((float) str_replace('$', '', $value))
        );
    }

    protected function question(): Attribute {
        return Attribute::make(set: fn(string $question) => trim($question, "'"));
    }
}
