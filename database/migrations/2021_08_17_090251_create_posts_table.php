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
            $table->text('extract')->nullable();
            $table->longText('contenido')->nullable();
            $table->enum('status', [1, 2])->default(1);
            $table->unsignedBigInteger('idUserFK');
            $table->unsignedBigInteger('idCategoryFK');

            $table->foreign('idUserFK')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idCategoryFK')->references('id')->on('categories')->onDelete('cascade');
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
