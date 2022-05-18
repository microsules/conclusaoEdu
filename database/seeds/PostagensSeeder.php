<?php

use Illuminate\Database\Seeder;

class PostagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'category_id' => 1,
                'title' => 'Inter x Corintians',
                'summary' => 'Teste',
                'text' => 'Teste'
            ]
        ]);
    }
}
