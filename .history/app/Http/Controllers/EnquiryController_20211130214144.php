<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class EnquiryController extends Controller
{
    private $path = "";
    
    public function index() {
        $enquiries = DB::select('SELECT * from enquiry');
        return view('pages/enquiry/enquiries_view', ['enquiries' => $enquiries]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}