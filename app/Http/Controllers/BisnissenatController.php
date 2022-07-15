<?php

namespace App\Http\Controllers;

use App\Models\bisnissenat;
use Illuminate\Http\Request;

class BisnissenatController extends Controller
{
    public function bisnis()
    {
        $data = bisnissenat::paginate(2);
        return view('dashboard.bisnis', compact('data'));
    }
    public function tambahbisnis()
    {
        return view('dashboard.tambahbisnis');
    }
    public function kirimbisnis(Request $request)
    {
        $data = bisnissenat::create($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Bisnis_Senat/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('bisnis')->with('succes', 'Berita Berhasil Ditambahkan');
    }
    public function tampilkanbisnis($id)
    {
        $data = bisnissenat::find($id);
        //dd($data);
        return view('dashboard.tampilkanbisnis', compact('data'));
    }
    public function ubahbisnis(Request $request, $id)
    {
        $data = bisnissenat::find($id);
        $data->update($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Bisnis_Senat/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('bisnis')->with('succes', 'Peraturan Berhasil Diubah');
    }
    public function hapusbisnis($id)
    {
        $data = bisnissenat::find($id);
        $data->delete();
        return redirect()->route('bisnis')->with('succes', 'Peraturan Berhasil Dihapus');
    } //

    //=======TAMPIL FRONT END=======
    public function bisnissenat()
    {
        $data = bisnissenat::paginate(8);
        return view('Bisnis_Senat',  compact('data'), [
            "title" => "PROSES BISNIS SENAT"
        ]);
    }
}
