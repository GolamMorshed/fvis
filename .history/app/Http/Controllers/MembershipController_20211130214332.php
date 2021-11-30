<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class MembershipController extends Controller
{
    private $path = "pages/memberships/";

    public function index_plan() {
        $plans = DB::select('SELECT * from tbl_membership_plans');
        return view($path.'membership_plans_view', ['plans' => $plans]);
    }
    
    public function index_request() {
        $requests = DB::select('SELECT * from tbl_membership_requests');
        return view($path.'pages/memberships/membership_requests_view', ['requests' => $requests]);
    }

    public function index_user() {
        $users = DB::select('SELECT * from membership_data');
        return view($path.'membership_users_view', ['users' => $users]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}