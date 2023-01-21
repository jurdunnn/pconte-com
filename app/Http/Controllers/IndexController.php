<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function create()
    {
        $testimonials = Testimonial::where('hidden', false)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('index', [
            'testimonials' => $testimonials,
        ]);
    }
}
