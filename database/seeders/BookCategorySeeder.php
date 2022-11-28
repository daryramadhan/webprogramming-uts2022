<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'book' => '1',
            'category'=> 'Remaja',
        ]);
        DB::table('books')->insert([
            'book' => '2',
            'category'=> 'Dewasa',
        ]);
        DB::table('books')->insert([
            'book' => '3',
            'category'=> 'Anak-anak',
        ]);
        DB::table('books')->insert([
            'book' => '4',
            'category'=> 'Romantis',
        ]);
    }
}
