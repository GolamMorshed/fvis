<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ContactController extends Controller
{
    public function index() {
        $contacts = DB::select('SELECT * from contacts');
        return view('free_consultation_view', ['contacts' => $contacts]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}