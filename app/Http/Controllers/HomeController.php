<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $buku = Buku::get();
        return view('home',['buku' => $buku]);
    }

    public function tambahData()
    {
        return view('tambah');
    }

    public function editData($id)
    {
        $buku = Buku::find($id);
        return view('edit',['buku' => $buku]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'gambar' => 'required|image',
            'tahun' => 'required',
            'deskripsi' => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/img', $gambar->hashName());

        //create post
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'gambar' => $gambar->hashName(),
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/home')->with(['message' => 'Data Berhasil Ditambahkan!']);     
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'sometimes|required',
            'penulis' => 'sometimes|required',
            'penerbit' => 'sometimes|required',
            'gambar' => 'sometimes|required|image',
            'tahun' => 'sometimes|required',
            'deskripsi' => 'sometimes|required'
        ]);

        $buku = Buku::find($id);

        if($request->hasFile('gambar')){

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/img', $gambar->hashName());

            $data['gambar'] = $gambar->hashName();

            //delete old image
            Storage::delete('public/img/' . $buku->image);
        }

        $buku->update($data);
        return redirect('/home')->with(['message' => 'Data berhasil Di Update']);
    }

    public function delete($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/home')->with(['messagedelete' => 'Data berhasil di Hapus']);
    }

}
