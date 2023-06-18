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
        Schema::create('neighbourhoods', function (Blueprint $table) {
            $table->id();
            $table->longText('image')->nullable();
            $table->string('title')->unique();
            $table->string('author')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('program')->nullable();
            $table->string('project_title')->nullable();
            $table->integer('year')->nullable();
            $table->longText('description')->nullable();
            $table->longText('descriptiona')->nullable();
            $table->string('imagea')->nullable();
            $table->longText('descriptionb')->nullable();
            $table->string('imageb')->nullable();
            $table->longText('descriptionc')->nullable();
            $table->string('imagec')->nullable();
            $table->longText('descriptiond')->nullable();
            $table->string('imaged')->nullable();
            $table->text('credits')->nullable();
            $table->string('location')->default('40.50, 8.00')->nullable();
            $table->string('status')->nullable();
            $table->string('size')->nullable();
            $table->text('tags')->nullable();
            $table->text('link')->nullable();
            $table->string('category')->default('Urbanscapes');
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
        Schema::dropIfExists('neighbourhoods');
    }
};
