<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streetscapes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->unique();
            $table->string('author')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('program')->nullable();
            $table->integer('year')->nullable();
            $table->longText('description')->nullable();
            $table->string('credits')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
            $table->string('size')->nullable();
            $table->string('tags')->nullable();
            $table->text('link')->nullable();
            $table->string('category')->default('Streetscapes');
            $table->text('address')->nullable();
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
        Schema::dropIfExists('streetscapes');
    }
};
