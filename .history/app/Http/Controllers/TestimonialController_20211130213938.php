<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class TestimonialController extends Controller
{
    private $path = "pages/testimonials/";

    public function index() {
        $testimonials = DB::select('SELECT * from testimonials');
        return view('testimonials_view', ['testimonials' => $testimonials]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}