<?php

use App\Article;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug');
            $table->integer('department_section_id')->unsigned();
            $table->integer('department_menu_id')->unsigned();
            $table->string('subtitle')->nullable();
            $table->string('status')->default(Article::NOT_ACTIVE_STATUS);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('department_section_id')->references('id')->on('department_sections')->onDelete('cascade');
            $table->foreign('department_menu_id')->references('id')->on('department_menus')->onDelete('cascade');
            

            //$table->foreign('department_menu_id')->references('id')->on('department_menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
