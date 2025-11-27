<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('order')->get();
        $about = About::first();
        $settings = Setting::all()->pluck('value', 'key');

        return view('welcome', compact('sliders', 'about', 'settings'));
    }
}
