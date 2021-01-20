<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_pegawai', 18);
            $table->string('id_spt', 5);
            $table->string('no_register', 100);
            $table->smallInteger('jumlah_spt');
            $table->date('tgl_terima');
            $table->string('id_pengemasan', 6)->nullable();
            $table->string('espt', 1)->default('0');
            $table->text('keterangan');
            $table->foreign('id_spt')->references->('id_spt')->on('jenis_spts');
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
        Schema::dropIfExists('registers');
    }
}
