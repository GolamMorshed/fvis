<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ProjectController extends Controller
{
    public function index() {
        $testimonials = DB::select('SELECT * from testimonials');
        return view('testimonials_view', ['testimonials' => $testimonials]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}