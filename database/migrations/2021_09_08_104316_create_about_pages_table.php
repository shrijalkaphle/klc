<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('aboutus')->nullable();
            $table->string('field1')->nullable();
            $table->string('field1-value')->nullable();
            $table->string('field2')->nullable();
            $table->string('field2-value')->nullable();
            $table->string('field3')->nullable();
            $table->string('field3-value')->nullable();
            $table->string('field4')->nullable();
            $table->string('field4-value')->nullable();
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
        Schema::dropIfExists('about_pages');
    }
}
