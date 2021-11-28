<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class MembershipController extends Controller
{
    public function index_plan() {
        $plans = DB::select('SELECT * from tbl_membership_plans');
        return view('membership_+_view', ['projects' => $projects]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}