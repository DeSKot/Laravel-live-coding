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
    public function up(): void
    {
        Schema::create('reviewsTranslation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('review_id')->constrained('reviews_general')->onDelete('cascade');
            $table->foreignId('locale_id')->constrained('locals')->onDelete('cascade');
            $table->string('description',2048)->nullable(false);
            $table->string('summary',512)->nullable(false);
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
        Schema::dropIfExists('reviews_translation');
    }
};
