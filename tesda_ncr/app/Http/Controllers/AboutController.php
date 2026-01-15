<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function history() {
        return view('about.history');
    }

    public function vision_mission() {
        return view('about.vision-mission');
    }

    public function organisational_chart() {
        return view('about.organisational-chart');
    }
}
