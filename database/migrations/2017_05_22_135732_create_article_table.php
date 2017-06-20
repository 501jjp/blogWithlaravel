<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("article",function(Blueprint $table){
           $table->increments("id");
           $table->timestamps();
           $table->string('articletitle', 100);
           $table->text('articlecontent');
           $table->uuid('symble')->unique();
           $table->string('type',20);
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
}
