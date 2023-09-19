<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Dima',
                'email' => 'dima@gmail.com',
                'phone' => '+38000000000',
                'photo' => 'https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png',
            ],
            [
                'name' => 'Mariya',
                'email' => 'mariya@gmail.com',
                'phone' => '+3800312300000',
                'photo' => 'https://d3jqtupnzefbtn.cloudfront.net/andersenlab/new-andersensite/testimonials/60x60/without-photo.png',
            ],
        ]);
    }
}
