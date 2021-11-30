<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurServiceController extends Controller
{
    private $path = "pages/our-services/";

    public function index() {
        $services = DB::select('SELECT * from ourservices');
        return view($path.'our_services_view', ['services' => $services]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}