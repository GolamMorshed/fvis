<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $path = "pages/users/";
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index');
    }

    public function view() {
        $users = DB::select('SELECT * from users');
        return view('users_view', ['users' => $users]);
    }
}
