<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class AdminController extends Controller
{
    public function show()
    {
        $user = User::all();
        return view('user.show', compact('user'))->with('user',$user);
        // if ($user->hasRole('user')){

        // }
    }
}
