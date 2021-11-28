<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class NewsletterController extends Controller
{
    public function index_() {
        $news = DB::select('SELECT * from tbl_membership_plans');
        return view('membership_plans_view', ['news' => $news]);
    }
    
    public function store() {

    }
    
    public function edit() {

    }
}