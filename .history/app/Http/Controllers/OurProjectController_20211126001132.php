<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurPartnerController extends Controller
{
    public function index() {
        $partners = DB::select('SELECT * from ourpartners');
        return view('our_projects_view', ['partners' => $partners]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}