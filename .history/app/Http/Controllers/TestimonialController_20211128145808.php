<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class TestimonialController extends Controller
{
    public function index() {
        $testi = DB::select('SELECT * from our_projects');
        return view('our_projects_view', ['testi' => $testi]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}