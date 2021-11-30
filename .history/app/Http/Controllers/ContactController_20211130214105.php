<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ContactController extends Controller
{
    private $path = "";

    public function index() {
        $contacts = DB::select('SELECT * from contact');
        return view('contact_details_view', ['contacts' => $contacts]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}