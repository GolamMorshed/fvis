<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ConsultationController extends Controller
{
    private $path = "pages/consultations/";

    public function index() {
        $consults = DB::select('SELECT * from free_consultation');
        return view($path.'free_consultation_view', ['consults' => $consults]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}