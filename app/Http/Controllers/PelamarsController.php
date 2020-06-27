<?php

namespace App\Http\Controllers;

use App\pelamars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PelamarsController extends Controller
{
    public function index()
    {
        // $pelamar = pelamars::all();
        // return view('admin.pelamar', compact('pelamar'));
    }

    public function create()
    {
        return view('form-pendaftaran');
    }

    protected function store(Request $request)
    {
        $validateData = $request->validate([
            'nik'           =>  'required|min:14|max:16',
            'nama_lengkap'  =>  'required|string|max:300',
            'tempat_lahir'  =>  'required|string|',
            'tanggal_lahir' =>  'required|date',
            'jenis_kelamin' =>  'required|in:P,L',
            'alamat'        =>  'required|string',
            'email'         =>  'required|string|email|max:255|unique:pelamars',
            'no_hp'         =>  'required',
            'pendidikan_terakhir'   => 'required',
            'minat_karir'   =>  'required',
            'upload_foto'    => 'required|file|image|max:6000',
            'upload_file'   =>  'required|file|max:6000',
        ]);


        //Mengambil request object untuk proses upload file
        $request = request();

        //Proses Upload file gambar profil
        if ($request->hasFile('upload_foto')) {
            //Menggunakan slug helper agar "nama" bisa di pakai sebagai bagian  dari nama gambar_profil
            $slug = str::slug($request['nama_lengkap']);

            // Mengambil extensi file asli
            $extFile = $request->upload_foto->getClientOriginalExtension();

            // Generate nama_gambar, gabungan dari slug "nama" + time() + extensi file
            $namaImage = $slug . '-' . time() . "." . $extFile;

            // Proses Upload, simpan ke dalam folder "uploads"
            $request->upload_foto->storeAs('public/uploads/images', $namaImage);
        } else {
            //Jika User tidak mengupload gambar, isi dengan gambar default
            $namaImage = 'default_profile.jpg';
        }

        //proses Upload File
        if ($request->hasFile('upload_file')) {
            //Slug
            $slug = Str::slug($request['nama_lengkap']);
            //Extensi
            $extFile = $request->upload_file->getClientOriginalExtension();
            //generate
            $namaFile = $slug . '.' . time() . "." . $extFile;
            //Proses Upload
            $request->upload_file->storeAs('public/uploads/files', $namaFile);
            


        }

        //Input Database
        $pelamars = new Pelamars();
        $pelamars->nik = $validateData['nik'];
        $pelamars->nama_lengkap = $validateData['nama_lengkap'];
        $pelamars->tempat_lahir = $validateData['tempat_lahir'];
        $pelamars->tanggal_lahir = $validateData['tanggal_lahir'];
        $pelamars->jenis_kelamin = $validateData['jenis_kelamin'];
        $pelamars->alamat = $validateData['alamat'];
        $pelamars->email = $validateData['email'];
        $pelamars->no_hp = $validateData['no_hp'];
        $pelamars->pendidikan_terakhir = $validateData['pendidikan_terakhir'];
        $pelamars->minat_karir = $validateData['minat_karir'];
        $pelamars->upload_foto = $namaImage;
        $pelamars->upload_file = $namaFile;
        $pelamars->save();

        if ($pelamars) {
            Alert::success('Pendaftaran Berhasil', 'Untuk Selanjutnya Admin Akan Menghubungi Lewat Email/Whatsapp.');
            return redirect('/form-pendaftaran');
        }
        if ($validateData->fails()) {
            return redirect('/form-pendaftaran')
                ->withErrors($validateData)
                ->withInput();
        }
    }
    // public function show(pelamars $pelamars)
    // {
    //     $detail_pelamar = pelamars::where('nik', $pelamars);
    //     $detail_pelamar->first();

    //     return view('admin.detail', ['detail_pelamar' => $pelamars]);
    // }

    public function edit(pelamars $pelamars)
    {
        //
    }

    public function update(Request $request, pelamars $pelamars)
    {
        //
    }

    // public function destroy($nik)
    // {
    //     $pelamar = pelamars::where('nik', $nik);
    //     $pelamar->delete();

    //     return redirect()->back()->with('sukses', 'data berhasil di hapus');
    // }
}
