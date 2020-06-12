<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunjungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengunjung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_pengunjung');
            $table->string('nama_pengunjung');
            $table->string('alamat_pengunjung');
            $table->string('jk_pengunjung');
            $table->string('telpon_pengunjung');
            $table->string('ktp_pengunjung');
            
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
        Schema::dropIfExists('pengunjung');
    }
}
