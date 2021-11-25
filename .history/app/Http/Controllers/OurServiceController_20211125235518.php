<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use DB;

class OurPartnerController extends Controller
{
    public function index() {
        $partners = DB::select('SELECT * from ourservices');
        return view('our_partners_view', ['partners' => $partners]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}