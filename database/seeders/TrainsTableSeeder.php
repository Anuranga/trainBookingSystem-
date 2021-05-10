<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Train::factory()->create();
    }
}
