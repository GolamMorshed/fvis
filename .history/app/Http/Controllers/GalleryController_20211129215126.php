<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class GalleryController extends Controller
{
    public function index() {
        $gallery = DB::select('SELECT * from gallery');
        return view('gallery_view', ['gallery' => $gallery]);
    }

    public function add() {
        

    public function store(Request $request) {

    }
    
    public function edit() {

    }
}