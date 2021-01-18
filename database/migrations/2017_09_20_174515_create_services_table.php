<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('name_it');
            $table->string('name_en')->nullable();
            $table->text('excerpt_it')->nullable();
            $table->text('excerpt_en')->nullable();
            $table->text('body_it');
            $table->text('body_en')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->integer('head_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('nurse_id')->nullable();
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
        Schema::dropIfExists('services');
    }
}
