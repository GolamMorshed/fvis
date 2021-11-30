<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ProjectController extends Controller
{
    private $path = "pages/";

    public function index() {
        $users = DB::select('SELECT * from project_user');
        return view('project_users_view', ['users' => $users]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}