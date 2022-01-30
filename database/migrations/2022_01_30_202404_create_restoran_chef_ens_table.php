<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestoranChefEnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoran_chef_ens', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('unvon', 150);
            $table->string('title', 250);
            $table->string('insag_link', 150);
            $table->string('watsap_link', 150);
            $table->string('img');
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
        Schema::dropIfExists('restoran_chef_ens');
    }
}
