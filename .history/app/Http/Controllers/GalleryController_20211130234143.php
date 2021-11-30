<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use DB;

class GalleryController extends Controller
{
    private $path;

    public function index() {
        $gallery = DB::select('SELECT * from gallery');
        return view('pages/gallery/gallery_view', ['gallery' => $gallery]);
    }

    public function add_view() {
        return view('pages/gallery/gallery_add');
    }

    public function edit_view($id) {
        $gallery = DB::select('SELECT * from gallery where id = ?',[$id]);
        return view('pages.gallery.gallery_edit', compact('gallery'));
    }

    public function store(Request $request, $id) {
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
    
    public function edit(Request $request, $id) {
        $title          = $request->input('title');
        $chinese_title  = $request->input('chinese_title');

        if(!$request->has('image')){
            $image = $request->input('old-name');
        }else{
            $file_path = public_path('images/').$request->input('old-image');
            if(!$request){
                unlink($file_path);
            }
            
            $image          = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $image);
        }

        $status         = $request->input('status');

        if($status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }

        DB::update(
            'UPDATE gallery set title = ?,chinese_title=?,image=?,status=? where id = ?',
            [
                $title,
                $chinese_title,
                $image,
                $status,
                $id]
            );
            $file_path = public_path('images/').$request->input('old-name');

            return back()->withStatus(__($file_path));
    }
}