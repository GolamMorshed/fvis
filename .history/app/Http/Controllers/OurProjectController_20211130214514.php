<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurProjectController extends Controller
{
    
    public function index() {
        $projects = DB::select('SELECT * from our_projects');
        return view('pages/our-projects/our_projects_view', ['projects' => $projects]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}