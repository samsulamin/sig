<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namawisatawan', 30);
            $table->string('alamat', 200);
            $table->string('email', 100)->unique();;
            $table->string('password', 100);
            $table->string('umur', 3);
            $table->string('jeniskelamin', 9);
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
        Schema::dropIfExists('wisatawan');
    }
}
