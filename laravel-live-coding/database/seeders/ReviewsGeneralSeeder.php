<?php

namespace Database\Seeders;

use App\ReviewsGeneral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // with photos
        DB::table('reviews_general')->insert(ReviewsGeneral::factory()->count(5)->raw());
        
        // without photos (using default value)
        $withoutPhotos = ReviewsGeneral::factory()->count(5)->raw();
        array_walk($withoutPhotos, function(&$record){
            unset($record['photo']);
        });
        DB::table('reviews_general')->insert($withoutPhotos);
    }
}
