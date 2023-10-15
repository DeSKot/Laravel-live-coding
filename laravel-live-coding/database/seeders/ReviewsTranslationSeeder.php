<?php

namespace Database\Seeders;

use App\ReviewsTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews_translation')->insert(ReviewsTranslation::factory()->count(10)->raw());
    }
}
