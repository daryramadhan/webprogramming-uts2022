<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id' => 5,
            'book_title' => 'Para Pencari Tuhan',
            'book_author' => 'Bambang Pramadi',
            'book_year'=> 2004,
            'book_synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod earum repellendus similique in eum voluptatum nihil animi, necessitatibus odio fugit!',
            'book_image' => 'http://lorempixel.com/400/200/sports/',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        DB::table('books')->insert([
            'publisher_id' => 5,
            'book_title' => 'Pengggembala domba',
            'book_author' => 'Sri Pujiastuti',
            'book_year'=> 2008,
            'book_synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod earum repellendus similique in eum voluptatum nihil animi, necessitatibus odio fugit!',
            'book_image' => 'http://lorempixel.com/400/200/sports/',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
        DB::table('books')->insert([
            'publisher_id' => 3,
            'book_title' => 'Cinta Setipis Kardus',
            'book_author' => 'Romli Rafael',
            'book_year'=> 2019,
            'book_synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod earum repellendus similique in eum voluptatum nihil animi, necessitatibus odio fugit!',
            'book_image' => 'http://lorempixel.com/400/200/sports/',
            'created_at' => Carbon::now()->format('Y:m:d H:m:s'),
            'updated_at' => Carbon::now()->format('Y:m:d H:m:s')
        ]);
    }
}
