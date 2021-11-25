<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurProjectController extends Controller
{
    public function index() {
        $projects = DB::select('SELECT * from ourprojects');
        return view('our_projects_view', ['projects' => $projects]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}