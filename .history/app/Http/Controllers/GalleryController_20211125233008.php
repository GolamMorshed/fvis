<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use DB;

class GalleryController extends Controller
{
    public function index() {
        $users = DB::select('SELECT * from gallery');
        return view('gallery_view', [''])

    }

    public function store() {

    }
    
    public function edit() {

    }
}