<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik')->unique();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('jenis_kelamin', 1);
            $table->text('alamat');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('pendidikan_terakhir');
            $table->string('minat_karir');
            $table->string('upload_foto');
            $table->string('upload_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamars');
    }
}

// $table->enum('minat_karir', ['customer_support', 'finance_and_administration', 'programmer', 'web_designer']);
