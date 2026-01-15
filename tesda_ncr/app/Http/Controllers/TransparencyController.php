<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransparencyController extends Controller
{
    public function transparency_seal() {
        return view('transparency.transparency-seal');
    }

    public function citizens_charter() {
        return view('transparency.citizens-charter');
    }

    public function philgeps_posting() {
        return view('transparency.philgeps-posting');
    }

    public function tesda_cart() {
        return view('transparency.tesda-cart');
    }
}
