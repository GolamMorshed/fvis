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
        return view('gallery_add');
    }

    public function store(Request $request) {
        $title          = $request->input('title');
        $chinese_title  = $request->input('chinese_title');
        $image          = $request->input('image');
        $status         = $request->input('status');

        $data = array(
            'title'=>$title,
            "chinese_title"=>$chinese_title,
            "image"=>$image,
            "status"=>$status
        );
        
        DB::table('gallery')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
    
    public function edit() {

    }
}