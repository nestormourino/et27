<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            
            $table->text('extract');
            $table->longText('body');
            $table->enum('status',[0,1])->default(0);

            //Relacion
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('materia_id')->nullable();

            //Restricción llave foranea

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('set null');


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
        Schema::dropIfExists('posts');
    }
}
