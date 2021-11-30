<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class NewUserController extends Controller
{
    private $path = "pages/users/";

    public function index() {
        $users = DB::select('SELECT * from users');
        return view($path.'users_view', ['users' => $users]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}