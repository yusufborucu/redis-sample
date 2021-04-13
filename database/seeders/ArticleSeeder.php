<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10000; $i++) {
            DB::table('articles')->insert([
                'title' => Str::random(20),
                'body' => Str::random(400)
            ]);
        }
    }
}
