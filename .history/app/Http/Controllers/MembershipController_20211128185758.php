<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class MembershipController extends Controller
{
    public function index_plan() {
        $plans = DB::select('SELECT * from tbl_membership_plans');
        return view('membership_plans_view', ['plans' => $plans]);
    }
    
    public function index_request() {
        $requests = DB::select('SELECT * from tbl_membership_requests');
        return view('membership_requests_view', ['requests' => $requests]);
    }

    public function index_user() {
        $requests = DB::select('SELECT * from tbl_membership_requests');
        return view('membership_requests_view', ['requests' => $requests]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}