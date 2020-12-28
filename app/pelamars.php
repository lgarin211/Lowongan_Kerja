<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelamars extends Model
{
    // protected $primaryKey = "nik";

    protected $fillable = ['nik', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'email', 'no_hp', 'pendidikan_terakhir', 'minat_karir', 'upload_foto', 'name'];

    protected $guarded = [];
}
