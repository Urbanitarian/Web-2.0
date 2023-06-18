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
            $table->longText('image')->nullable();
            $table->string('imagea')->nullable();
            $table->string('imageb')->nullable();
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->string('city')->nullable();
            $table->integer('area')->nullable();
            $table->string('country')->nullable();
            $table->string('program')->nullable();
            $table->integer('year')->nullable();
            $table->longText('description')->nullable();
            $table->text('credits')->nullable();
            $table->string('location')->default('40.50, 8.00')->nullable();
            $table->string('status')->nullable();
            $table->string('size')->nullable();
            $table->text('tags')->nullable();
            $table->text('link')->nullable();
            $table->string('category')->default('Streetscapes');
            $table->text('address')->nullable();
            $table->bigInteger('masterplan_id')->nullable();
            $table->integer('active')->default('1');
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
