<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use DB;

class OurServiceController extends Controller
{
    public function index() {
        $services = DB::select('SELECT * from ourservices');
        return view('our_services_view', ['services' => $services]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}