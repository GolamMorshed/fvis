<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurPartnerController extends Controller
{
    public function index() {
        $partners = DB::select('SELECT * from ourpartners');
        return view('pages/our_partners_view', ['partners' => $partners]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}