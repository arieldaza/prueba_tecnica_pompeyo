<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($j=1; $j < 201; $j++) {
            \App\Models\Comment::factory(10)->create([
                'post_id' => $j,
            ]);
        }
    }
}
