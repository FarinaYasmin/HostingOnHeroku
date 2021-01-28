<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

class CreateBkoMaklumatDiriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bko_maklumat_diri', function (Blueprint $table) {
            $table->id('id');
            $table->string('gelaran');
            $table->string('nama_penuh');
            $table->char('jantina');
            $table->date('tarikh_lahir');
            $table->integer('umur');
            $table->string('taraf_perkahwinan');
            $table->string('bangsa');
            $table->string('agama');
            $table->string('warganegara');
            $table->string('no_kp');
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
        Schema::dropIfExists('bko_maklumat_diri');
    }
}
