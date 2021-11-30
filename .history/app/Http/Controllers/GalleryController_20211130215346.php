<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class GalleryController extends Controller
{
    private $path = "pages/gallery/";

    public function index() {
        $gallery = DB::select('SELECT * from gallery');
        return view($path.'gallery_view', ['gallery' => $gallery]);
    }

    public function add() {
        return view($path.'gallery_add');
    }

    public function store(Request $request) {
        $title          = $request->input('title');
        $chinese_title  = $request->input('chinese_title');
        // $image          = $request->input('image');
        $image          = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        $status         = $request->input('status');

        if($status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }

        $data = array(
            'title'=>$title,
            "chinese_title"=>$chinese_title,
            "image"=>$image,
            "status"=>$status
        );

        DB::table('gallery')->insert($data);
        return back()->withStatus(__('Gallery successfully updated.'));
        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/gallery-records">Click Here</a> to go back.';
    }
    
    public function edit(Request $request) {

    }
}