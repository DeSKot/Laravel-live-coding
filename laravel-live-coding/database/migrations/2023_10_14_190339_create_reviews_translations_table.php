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
        Schema::create('reviews_translation', function (Blueprint $table) {
            $table->id();
            $table->integer('review_id');
            $table->string('description')->nullable(false);
            $table->string('summary')->nullable(false);
            $table->integer('locale_id');

            $table->foreign('locale_id')->references('id')->on('locals')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews_translation');
    }
};
