<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class PageController extends Controller
{
    public function index() {
        $pages = DB::select('SELECT * from our_projects');
        return view('our_projects_view', ['projects' => $projects]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}