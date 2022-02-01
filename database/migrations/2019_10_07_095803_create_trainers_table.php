<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_section_id')->unsigned();
            $table->integer('department_menu_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();

            $table->foreign('department_section_id')->references('id')->on('department_sections')->onDelete('cascade');
            $table->foreign('department_menu_id')->references('id')->on('department_menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
