<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ConsultationController extends Controller
{
    public function index() {
        $consults = DB::select('SELECT * from free_consultation');
        return view('free_consultations_view', ['consults' => $consults]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}