<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelamars;
use PDF;


class AdminController extends Controller
{
    public function index()
    {
        $pelamar = pelamars::paginate(10);

        return view('admin.pelamar', ['pelamar' => $pelamar]);
    }

    public function show($pelamar)
    {
        $result = pelamars::find($pelamar);
        return view('admin.detail', ['pelamar' => $result]);
    }

    public function contact()
    {
        $result = pelamars::all();
        return view('admin.contact', ['pelamar' => $result]);
    }

    public function cetak($pelamar)
    {
        $pelamar = pelamars::where('nik', $pelamar)->first();

        $pdf = PDF::loadView('admin.cetak', ['result' => $pelamar]);
        return $pdf->stream();
    }


    public function destroy($pelamar)
    {
        $pelamar = pelamars::where('id', $pelamar);
        $pelamar->delete();

        return redirect()->back()->with('sukses', 'data berhasil di hapus');
    }
}
