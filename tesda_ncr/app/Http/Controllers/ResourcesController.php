<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function downloadable_files() {
        return view('tesda-resources.downloadable-files');
    }

    public function lmir() {
        return view('tesda-resources.lmir');
    }

    public function planning_guidelines() {
        return view('tesda-resources.planning-guidelines');
    }

    public function tvet_statistics() {
        return view('tesda-resources.tvet-statistics');
    }

    public function tvet_brief() {
        return view('tesda-resources.tvet-brief');
    }

    public function skills_need_anticipation() {
        return view('tesda-resources.skills-need-anticipation');
    }

    public function tsir() {
        return view('tesda-resources.tsir');
    }
}
