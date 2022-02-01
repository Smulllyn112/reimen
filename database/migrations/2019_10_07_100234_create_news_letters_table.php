<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_letters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_name')->nullable();
            $table->string('second_parent_name')->nullable();
            $table->string('child_name')->nullable();
            $table->string('child_born')->nullable();
            $table->string('email')->unique();
            $table->string('department_section')->nullable();
            $table->string('class')->nullable();
            $table->integer('accepted');
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
        Schema::dropIfExists('news_letters');
    }
}
