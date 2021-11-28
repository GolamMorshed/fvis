<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ContactController extends Controller
{
    public function index() {
        $contacts = DB::select('SELECT * from fviss');
        return view('contact_details_view', ['contacts' => $contacts]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}