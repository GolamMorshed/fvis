<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use DB;

class GalleryController extends Controller
{
    public function index() {
        $partners = DB::select('SELECT * from ourpartners');
        return view('gallery_view', ['gallery' => $gallery]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}