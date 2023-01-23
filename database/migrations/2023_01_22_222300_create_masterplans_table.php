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
        Schema::create('masterplans', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->unique();
            $table->string('author')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('program')->nullable();
            $table->integer('year')->nullable();
            $table->integer('area')->nullable();
            $table->integer('gfa')->nullable();
            $table->integer('density')->nullable();
            $table->integer('popdensity')->nullable();
            $table->integer('homeunit')->nullable();
            $table->integer('jobs')->nullable();
            $table->integer('streetroad')->nullable();
            $table->integer('buildup')->nullable();
            $table->integer('nonbuildup')->nullable();
            
            $table->integer('residential')->nullable();
            $table->integer('business')->nullable();
            $table->integer('commercial')->nullable();
            $table->integer('civic')->nullable();
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
        Schema::dropIfExists('masterplans');
    }
};
