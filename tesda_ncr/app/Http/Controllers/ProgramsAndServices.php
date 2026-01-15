<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsAndServices extends Controller
{
    public function tvet_programs() {
        return view('programs-and-services.tvet-programs');
    }

    public function comp_stand_develop() {
        return view('programs-and-services.comp-stand-develop');
    }

    public function assess_and_certif() {
        return view('programs-and-services.assess-and-certif');
    }

    public function program_reg_accredit() {
        return view('programs-and-services.program-reg-accredit');
    }

    public function national_tesd_plan() {
        return view('programs-and-services.national-tesd-plan');
    }
}
