<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class PageController extends Controller
{
    public function index_page() {
        $pages = DB::select('SELECT * from tbl_cms');
        return view('cms_pages_view', ['pages' => $pages]);
    }

    public function index_block() {
        $blocks = DB::select('SELECT * from investment_blocks');
        return view('investment_blocks_view', ['blocks' => $blocks]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}