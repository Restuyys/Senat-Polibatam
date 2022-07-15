<?php

namespace App\Http\Controllers;

use App\Models\berita;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function berita()
    {

        $data = berita::paginate(1);
        return view('dashboard.berita', compact('data'));
    } //
    public function tambahberita()
    {
        return view('dashboard.tambahberita');
    } //
    public function kirimberita(Request $request)
    {
        $data = berita::create($request->all());
        if ($request->hasFile('gambar_berita')) {
            $request->file('gambar_berita')->move('fotoberita/', $request->file('gambar_berita')->getClientOriginalName());
            $data->gambar_berita = $request->file('gambar_berita')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('berita')->with('succes', 'Berita Berhasil Ditambahkan');
    }
    public function tampilkanberita($id)
    {
        $data = berita::find($id);
        //dd($data);
        return view('dashboard.tampilkanberita', compact('data'));
    }
    public function ubahberita(Request $request, $id)
    {
        $data = berita::find($id);
        $data->update($request->all());
        if ($request->hasFile('gambar_berita')) {
            $request->file('gambar_berita')->move('fotoberita/', $request->file('gambar_berita')->getClientOriginalName());
            $data->gambar_berita = $request->file('gambar_berita')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('berita')->with('succes', 'Berita Berhasil Diubah');
    }
    public function hapusberita($id)
    {
        $data = berita::find($id);
        $data->delete();
        return redirect()->route('berita')->with('succes', 'Berita Berhasil Dihapus');
    }
    public function beritadepan()
    {
        $data = berita::paginate(8);
        return view('Beranda',   compact('data'), [
            "title" => "BERANDA",
        ]);
    }
    public function beritaopen($id)
    {

        $data = DB::table('beritas')->where('beritas.id', $id)->get();
        return view('beritaopen', ['data' => $data, "title" => "BERANDA"]);


        //$data = berita::all();
        //return view('beritaopen',   compact('data'), [
        //  "title" => "BERANDA",
        //]);
    }
}
