<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class TestimonialController extends Controller
{
    public function index() {
        $testimonials = DB::select('SELECT * from testimonials');
        return view('our_projects_view', ['testimonials' => $testimonials]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}