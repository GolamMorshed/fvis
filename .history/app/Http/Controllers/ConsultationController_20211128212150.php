<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class ConsultationController extends Controller
{
    public function index() {
        $users = DB::select('SELECT * from users');
        return view('users_view', ['users' => $users]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}