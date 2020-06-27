<!DOCTYPE html>
<html>
<head>
    <title>Informasi Data Diri Calon Pekerja</title>
</head>
<body>
    <!-- Header -->
    <h1><center><font size="6" face="arial">PT BONET UTAMA</font></center></h1>
    <!-- <center><b><font size="4" face="Courier New">IT Solution partner</font></b></center><br>  -->
    <center><small>Jl. Raya Pajajaran No.88F, RT.01/RW.07, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153</small></center><br>
    <hr><width="100" height="75"></hr>

    <h3 style="text-align: center;">Daftar Identitas Calon Pekerja Baru</h3>

    <!-- Content -->
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 13pt;
        }
    </style>

    
    <table class='table table-bordered'>

        <tbody>

            {{-- {{ dd($result) }} --}}

            <tr>
                <td width="25%" valign="top" class="text">NIK</td>
                <td width="2%">:</td>
                <td style="color: rgb(118, 157, 29); font-weight:bold">{{$result->nik}} </td>
            </tr>

            <tr>
                <td class="text">Nama Lengkap</td>
                <td>:</td>
                <td>{{$result->nama_lengkap}} </td>
            </tr>

            <tr>
              <td class="text">Jenis Kelamin</td>
              <td>:</td>
              <td>{{$result->jenis_kelamin =='P' ? 'Perempuan' : 'Laki-laki' }} </td>
            </tr>

            <tr>
                <td class="text">Tempat Lahir</td>
                <td>:</td>
                <td>{{$result->tempat_lahir}} </td>
            </tr>

            <tr>
                <td class="text">Tanggal Lahir</td>
                <td>:</td>
                <td>{{$result->tanggal_lahir}} </td>
            </tr>

            <tr>
                <td class="text">Alamat</td>
                <td>:</td>
                <td>{{$result->alamat}}</td>
            </tr>

            <tr>
                <td class="text">Email</td>
                <td>:</td>
                <td>{{$result->email}}</td>
            </tr>

            <tr>
                <td class="text">No. Telepon</td>
                <td>:</td>
                <td>{{$result->no_hp}}</td>
            </tr>

            <tr>
                <td class="text">Pendidikan Terakhir</td>
                <td>:</td>
                <td>{{$result->pendidikan_terakhir}}</td>
            </tr>

            <tr>
                <td class="text">Minat Karir</td>
                <td>:</td>
                <td>{{$result->minat_karir}}</td>
            </tr>            

        </tbody>

    </table>

</body>
</html>