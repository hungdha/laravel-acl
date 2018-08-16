<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'A former adviser to Donald Trump has released',
            'content' => 'In the tape played on US TV channel NBC, a voice presumed to be Mr Trump\'s expresses surprise at Omarosa Manigault Newman being fired the previous day.',
            'user_id' => 3,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
