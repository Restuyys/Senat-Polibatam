<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use App\Models\sksenat;
use App\Models\spsenat;
use Illuminate\Http\Request;

class DokumenController extends Controller
{ //---------------BACKEND-------
    public function peraturansenat()
    {
        $data = Peraturan::paginate(2);
        return view('dashboard.peraturan_senat', compact('data'));
    }
    public function tambahperaturan()
    {
        return view('dashboard.tambahperaturan');
    }
    public function kirimperaturan(Request $request)
    {
        $data = Peraturan::create($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Peraturan_Senat/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('peraturansenat')->with('succes', 'Berita Berhasil Ditambahkan');
    }
    public function tampilkanperaturan($id)
    {
        $data = Peraturan::find($id);
        //dd($data);
        return view('dashboard.tampilkanperaturan', compact('data'));
    }
    public function ubahperaturan(Request $request, $id)
    {
        $data = Peraturan::find($id);
        $data->update($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Peraturan_Senat/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('peraturansenat')->with('succes', 'Peraturan Berhasil Diubah');
    }
    public function hapusperaturan($id)
    {
        $data = Peraturan::find($id);
        $data->delete();
        return redirect()->route('peraturansenat')->with('succes', 'Peraturan Berhasil Dihapus');
    }
    //============FRONTEND==============
    public function produksenatopen()
    {
        $data = Peraturan::paginate(8);
        return view('Produk_Open',  compact('data'), [
            "title" => "PRODUK SENAT"
        ]);
    }
    public function skopen()
    {
        $data = sksenat::all();
        return view('sk_open',  compact('data'), [
            "title" => "PRODUK SENAT"
        ]);
    }
    public function spopen()
    {
        $data = spsenat::all();
        return view('sp_open',  compact('data'), [
            "title" => "PRODUK SENAT"
        ]);
    }
    //===============SURAT KEPUTUSAN SENAT=================
    public function sksenat()
    {
        $data = sksenat::paginate(2);
        return view('dashboard.suratkeputusan', compact('data'));
    }
    public function tambahsk()
    {
        return view('dashboard.tambahsk');
    }
    public function kirimsk(Request $request)
    {
        $data = sksenat::create($request->all());
        if ($request->hasFile('file')) {
            $request->file('file')->move('Surat_Keputusan/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('sksenat')->with('succes', 'Berita Berhasil Ditambahkan');
    }
    public function tampilkansk($id)
    {
        $data = sksenat::find($id);
        //dd($data);
        return view('dashboard.tampilkansk', compact('data'));
    }
    public function ubahsk(Request $request, $id)
    {
        $data = sksenat::find($id);
        $data->update($request->all());
        if ($request->hasFile('file')) {
            $request->file('file')->move('Surat_Keputusan/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('sksenat')->with('succes', 'Berita Berhasil Ditambahkan');
    }
    public function hapussk($id)
    {
        $data = sksenat::find($id);
        $data->delete();
        return redirect()->route('sksenat')->with('succes', 'Peraturan Berhasil Dihapus');
    }
    //========SP SENAT=======
    public function spsenat()
    {
        $data = spsenat::paginate(2);
        return view('dashboard.spsenat', compact('data'));
    }
    public function tambahsp()
    {
        return view('dashboard.tambahsp');
    }
    public function kirimsp(Request $request)
    {
        $data = spsenat::create($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Surat_Pertimbangan/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('spsenat')->with('succes', 'Berita Berhasil Ditambahkan');
    }
    public function tampilkansp($id)
    {
        $data = spsenat::find($id);
        //dd($data);
        return view('dashboard.tampilkansp', compact('data'));
    }
    public function ubahsp(Request $request, $id)
    {
        $data = spsenat::find($id);
        $data->update($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Surat_Pertimbangan/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('spsenat')->with('succes', 'Peraturan Berhasil Diubah');
    }
    public function hapussp($id)
    {
        $data = spsenat::find($id);
        $data->delete();
        return redirect()->route('spsenat')->with('succes', 'Peraturan Berhasil Dihapus');
    }
}
