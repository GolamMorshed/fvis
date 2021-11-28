<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ConsultationController extends Controller
{
    public function index() {
        $consults = DB::select('SELECT * from free_consultations');
        return view('users_view', ['users' => $users]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}