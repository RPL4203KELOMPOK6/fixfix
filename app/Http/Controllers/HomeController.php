<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Album;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $album = Album::all();
        return view('home')->with('album',$album);
    }

    public function index2()
    {
        $album = Album::all();
        $users = User::all();
        return view('admins', compact('users','album'));
    }
    
    public function profile()
    {
        return view('pemesanan.profile')->with('user', auth()->user());
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id)->update([
            "name" => $request["name"],
            "email" => $request["email"],
            "phone" => $request["phone"],
            "alamat" => $request["alamat"]
        ]);       
        // $user = auth()->user();
        
        // $user->update([
        //     "name" => $request["name"],
        //     "email" => $request["email"],
        //     "phone" => $request["phone"]
        // ]);       
    
        return redirect('/profile')->with('success', 'Data sukses diupdate');
    }

    // public function detail_produk(Produck $produck)
    // {
    //     return view('pemesanan.detail_produk',compact('produck'));
    // }
}
