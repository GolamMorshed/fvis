<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurServiceController extends Controller
{
    public function index() {
        $services = DB::select('SELECT * from ourservices');
        return view('pages/ourour_services_view', ['services' => $services]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}