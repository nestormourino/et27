<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->string('url');
            $table->enum('slider',[0,1])->default(0);

            //Relaciones
            $table->unsignedBigInteger('user_creator_id')->nullable();
            $table->unsignedBigInteger('user_editor_id')->nullable();

            //Llaves foraneas
            $table->foreign('user_creator_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('user_editor_id')->references('id')->on('users')->onDelete('set null');
            
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
        Schema::dropIfExists('images');
    }
}
