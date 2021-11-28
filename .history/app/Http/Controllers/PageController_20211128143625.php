<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class PageController extends Controller
{
    public function index() {
        $pages = DB::select('SELECT * from tbl_cms');
        return view('cms_pages_view', ['pages' => $projects]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}