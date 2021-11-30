<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class MembershipController extends Controller
{
    
    public function index_plan() {
        $plans = DB::select('SELECT * from tbl_membership_plans');
        return view('pages/memberships/membership_plans_view', ['plans' => $plans]);
    }
    
    public function index_request() {
        $requests = DB::select('SELECT * from tbl_membership_requests');
        return view('pages/memberships/membership_requests_view', ['requests' => $requests]);
    }

    public function index_user() {
        $users = DB::select('SELECT * from membership_data');
        return view('pages/memberships/membership_users_view', ['users' => $users]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}