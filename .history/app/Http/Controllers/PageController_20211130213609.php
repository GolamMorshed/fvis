<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class PageController extends Controller
{
    global $cmsPath = "";

    public function index_page() {
        $pages = DB::select('SELECT * from tbl_cms');
        return view('pages/cms-pages/cms_pages_view', ['pages' => $pages]);
    }

    public function index_block() {
        $blocks = DB::select('SELECT * from investment_blocks');
        return view('investment_blocks_view', ['blocks' => $blocks]);
    }

    public function index_car() {
        $cars = DB::select('SELECT * from carlist');
        return view('benefit_cars_view', ['cars' => $cars]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}