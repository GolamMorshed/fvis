<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurPartnerController extends Controller
{
    private $path = "pages/our-partners//";

    public function index() {
        $partners = DB::select('SELECT * from ourpartners');
        return view('pages/our-partners/our_partners_view', ['partners' => $partners]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}