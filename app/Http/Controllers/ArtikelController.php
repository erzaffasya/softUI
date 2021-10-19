<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.index', compact('artikel'));
    }

    public function create()
    {
     
        return view('admin.artikel.tambah');
    }

    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $upload = $request->gambar;
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $request->gambar->move(public_path('assets/foto/artikel'), $file_name);
        } else {
            $file_name = null;
        }

        artikel::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $file_name,
        ]);
        return redirect()->route('artikel.index')
            ->with('success', 'artikel Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $artikels = artikel::where('id', $id)->first();
        return view('admin.artikel.show', compact('artikel'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $artikel = artikel::find($id);

        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {


        $artikel = artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;  

        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $file_name = time().'.'.$extention;
            $request->gambar->move(public_path('assets/foto/artikel'),$file_name);
            $artikel->gambar = $file_name;
        }else{}

        $artikel->save();

        return redirect()->route('artikel.index')
        ->with('edit', 'Artikel Berhasil Diedit');
    }

    public function destroy($id)
    {
        artikel::where('id', $id)->delete();

        return redirect()->route('artikel.index')
            ->with('delete', 'artikel Berhasil Dihapus');
    }
}
