<?php

namespace App\Http\Controllers;

use App\Models\aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function aspirasi()
    {
        $data = aspirasi::paginate(2);
        return view('dashboard.aspirasi', compact('data'));
    } //
    public function hapusaspirasi($id)
    {
        $data = aspirasi::find($id);
        $data->delete();
        return redirect()->route('aspirasi')->with('succes', 'Berita Berhasil Dihapus');
    }
    public function aspirasisenat()
    {
        return view('aspirasisenat', [
            "title" => "ASPIRASI"
        ]);
    }
    public function kirimaspirasi(Request $request)
    {

        aspirasi::create([
            'judul_aspirasi' => $request->judul_aspirasi,
            'uk_tujuan' => $request->uk_tujuan,
            'isi_aspirasi' => $request->isi_aspirasi,
        ]);
        return redirect('/aspirasisenat');
    }
    public function cetakaspirasi()
    {
        $data = aspirasi::all();
        return view('dashboard.cetakaspirasi', compact('data'));
    }
}
