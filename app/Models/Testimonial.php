<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    use HasFactory;


    public function getLabelLetterAttribute()
    {
        return substr($this->name, 0, 1);
    }

    public function getLabelColorAttribute()
    {
        $colors = [
            'blue',
            'red',
            'yellow',
            'green',
            'purple',
            'indigo',
        ];

        return $colors[rand(0, sizeof($colors) - 1)];
    }
}
