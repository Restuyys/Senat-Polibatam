<?php

namespace App\Http\Controllers;

use App\Models\programkerja;
use Illuminate\Http\Request;

class ProgramkerjaController extends Controller
{
    public function programkerja()
    {
        $data = programkerja::paginate(2);
        return view('dashboard.programkerja', compact('data'));
    }
    public function tambahkerja()
    {
        return view('dashboard.tambahkerja');
    }
    public function kirimkerja(Request $request)
    {
        $data = programkerja::create($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Program_Kerja/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('programkerja')->with('succes', 'Berita Berhasil Ditambahkan');
    }
    public function tampilkankerja($id)
    {
        $data = programkerja::find($id);
        //dd($data);
        return view('dashboard.tampilkankerja', compact('data'));
    }
    public function ubahkerja(Request $request, $id)
    {
        $data = programkerja::find($id);
        $data->update($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('Program_Kerja/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('programkerja')->with('succes', 'Peraturan Berhasil Diubah');
    }
    public function hapuskerja($id)
    {
        $data = programkerja::find($id);
        $data->delete();
        return redirect()->route('programkerja')->with('succes', 'Peraturan Berhasil Dihapus');
    }
    //============FRONTEND==============
    public function programkerjasenat()
    {
        $data = programkerja::paginate(8);
        return view('Program_Kerja',  compact('data'), [
            "title" => "PROGRAM KERJA"
        ]);
    }
}
