<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class <?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class OurPartnerController extends Controller
{
    public function index() {
        $partners = DB::select('SELECT * from ourpartners');
        return view('our_partners_view', ['partners' => $partners]);
    }

    public function store() {

    }
    
    public function edit() {

    }
} extends Controller
{
    public function index() {
        $projects = DB::select('SELECT * from ourprojects');
        return view('our_projects_view', ['projects' => $projects]);
    }

    public function store() {

    }
    
    public function edit() {

    }
}