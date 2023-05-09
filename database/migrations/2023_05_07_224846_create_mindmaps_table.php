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
        Schema::create('mindmaps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('subjudul');
            $table->string('posisi');
            $table->integer('red');
            $table->integer('green');
            $table->integer('blue');
            $table->boolean('is_kanan');
            $table->integer('mindmap_id');
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
        Schema::drop('mindmaps');
    }
};
