<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Album;

class AlbumController extends Controller
{
    public function create()
    {
        return view('album.create');
    }

    public function upload(){
        $gambar = Album::get();
        return view('index',['gambar' => $gambar]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'penyanyi' => 'required',
            'harga' => 'required',
            'gambar' => 'mimes:jpeg,png,jpg|max:5048',
            'deskripsi' => 'required'
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->file('gambar');
    
        $nama_file = time()."_".$gambar->getClientOriginalName();
    
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'image';
        $gambar->move($tujuan_upload,  $nama_file);

        Album::create([
            'nama' => $request->nama,
            'penyanyi' => $request->penyanyi,
            'harga' => $request->harga,
            'gambar' => $nama_file,
            'deskripsi' => $request->deskripsi
        ]);
        
        return redirect('/admin/dataalbum')->with('success', 'Data sukses ditambahkan');
    }

    public function index()
    {
        $album = Album::all();
        return view('album.index', compact('album'));
    }

    public function show($id)
    {
        $album = Album::find($id);
        return view('album.show', compact('album'));
    }

    public function edit($id)
    {
        $album = Album::find($id);
        return view('album.edit', compact('album'));
    }

    public function update(Request $request, $id)
    {
        $nama_file = null;
        if ($request->gambar) {
            $nama_file = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('image'), $nama_file);
        }
        $album = Album::where('id', $id)->update([
            "nama" => $request["nama"],
            "penyanyi" => $request["penyanyi"],
            "harga" => $request["harga"],
            "gambar" => $nama_file,
            "deskripsi" => $request["deskripsi"]
        ]);       
        
        return redirect('/admin/dataalbum')->with('success', 'Data sukses diupdate');
    }

    public function destroy($id)
    {
        Album::destroy($id);
        return redirect('/admin/dataalbum')->with('success', 'Data sukses dihapus');
    }

    public function welcome()
    {
        $album = Album::all();
        return view('welcome')->with('album',$album);
    }

    public function detail($id)
    {
        $data = Album::find($id);
        return view('pemesanan.detail', compact('data'));
    }
}
