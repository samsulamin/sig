<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namawisata', 30);
            $table->string('alamatwisata', 200);
            $table->string('kategori', 20);
            $table->string('wilayah', 20);
            $table->string('fasilitas', 300);
            $table->string('latitude', 30);
            $table->string('longitude', 30);
            $table->string('foto', 200);
            $table->string('video', 200);
            $table->string('status', 1);
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
        Schema::dropIfExists('wisata');
    }
}
