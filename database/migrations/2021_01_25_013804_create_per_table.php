<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('per', function (Blueprint $table) {
            $table->id();
            $table->string('gelaran')->nullable();
            $table->string('nama_penuh')->nullable();
            $table->char('jantina')->nullable();
            $table->date('tarikh_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->string('taraf_perkahwinan')->nullable();
            $table->string('bangsa')->nullable();
            $table->string('agama')->nullable();
            $table->string('warganegara')->nullable();
            $table->string('no_kp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_tel')->nullable();
            $table->string('emel')->nullable();
            
            //Maklumat Bank
            $table->string('pemilik_akaun_bank')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('no_akaun_bank')->nullable();

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
        Schema::dropIfExists('per');
    }
}
