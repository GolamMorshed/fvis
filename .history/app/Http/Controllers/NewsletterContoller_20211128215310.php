<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class MembershipController extends Controller
{
    public function index_() {
        $plans = DB::select('SELECT * from tbl_membership_plans');
        return view('membership_plans_view', ['plans' => $plans]);
    }
    
    public function store() {

    }
    
    public function edit() {

    }
}