<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ProjectController extends Controller
{
    public function index() {
        $users = DB::select('SELECT * from project_user');
        return view('project_users_view', ['testimonials' => $testimonials]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}