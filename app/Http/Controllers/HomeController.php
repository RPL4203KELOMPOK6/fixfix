<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

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
        return view('admin');
    }

    // public function detail_produk(Produck $produck)
    // {
    //     return view('pemesanan.detail_produk',compact('produck'));
    // }
}
