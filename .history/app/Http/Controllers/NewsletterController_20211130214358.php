<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use DB;

class NewsletterController extends Controller
{
    private $path = "pages/news-letter/";

    public function index() {
        $news = DB::select('SELECT * from tbl_newsletter');
        return view('newsletter_view', ['news' => $news]);
    }
    
    public function store() {

    }
    
    public function edit() {

    }
}