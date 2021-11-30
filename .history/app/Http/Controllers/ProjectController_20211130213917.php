<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ProjectController extends Controller
{
    private $path = "pages/project-users/";

    public function index() {
        $users = DB::select('SELECT * from project_user');
        return view($path.'project_users_view', ['users' => $users]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}