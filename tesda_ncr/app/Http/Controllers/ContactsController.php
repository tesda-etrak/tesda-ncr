<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function regional_district_offices() {
        $roContactId = 1;
        $doContactIds = [2, 7];

        $roContact = Contact::findOrFail($roContactId);
        $doContacts = Contact::whereBetween('id', $doContactIds)->get();

        return view('contacts.regional-district-offices', compact('roContact', 'doContacts'));
    }
    
    public function technology_institute() {
        $rtcContactId = 8;
        $ptcContactIds = [9, 14];

        $rtcContact = Contact::findOrFail($rtcContactId);
        $ptcContacts = Contact::whereBetween('id', $ptcContactIds)->get();

        return view('contacts.technology-institute', compact('rtcContact', 'ptcContacts'));
    }
}
