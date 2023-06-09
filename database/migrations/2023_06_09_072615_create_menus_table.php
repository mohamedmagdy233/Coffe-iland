<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{

    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('details');
            $table->double('price');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
