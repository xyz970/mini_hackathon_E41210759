<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah',function(Blueprint $b){
            $b->id('id');
            $b->string('tipe',10);
            $b->integer('harga');
            $b->enum('status',['Tersedia','Tidak Tersedia'])->default('Tersedia');
            $b->string('foto');
            $b->text('keterangan');
            $b->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
