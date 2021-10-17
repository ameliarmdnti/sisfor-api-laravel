<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Kata',
                'author_name' => 'Nadhifa Allya Tsana',
                'price' => '89.000',
                'isbn' => '9789797809324',
                'category' => 'Fiksi, Romantis',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Di Tanah Lada',
                'author_name' => 'Ziggy Zezsya',
                'price' => '50.000',
                'isbn' => '978-602-03-1896-7',
                'category' => 'Slice of Life',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Dear Heart, Why Him?',
                'author_name' => 'Haula S.',
                'price' => '100.000',
                'isbn' => '9786024301880',
                'category' => 'Fiksi, Komik',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Dear Nathan',
                'author_name' => 'Erisca Febriani',
                'price' => '99.000',
                'isbn' => '9786026940148',
                'category' => 'Fiksi',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Once Upon a Time',
                'author_name' => 'Dheyamela',
                'price' => '99.500',
                'isbn' => '978-623-7524-05-2',
                'category' => 'Misteri, Thriller',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Friendzone',
                'author_name' => 'Vanesa Marcella',
                'price' => '64.000',
                'isbn' => '978-602-430-000-5',
                'category' => 'Fiksi, Romantis',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Forever Monday',
                'author_name' => 'Ruth Priscilia',
                'price' => '62.000',
                'isbn' => '978-602-03-4621-2',
                'category' => 'Drama, Romantis',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Are You? Really?',
                'author_name' => 'Innayah Putri',
                'price' => '78.000',
                'isbn' => '9786022202080',
                'category' => 'Romantis',
                'created_at' => Carbon::now()
            ], [
                'title' => 'Madielief',
                'author_name' => 'Kiranada Genre',
                'price' => '82.000',
                'isbn' => '978-623-91330-9-2',
                'category' => 'Misteri, Thriller',
                'created_at' => Carbon::now()
            ], [
                'title' => 'EL',
                'author_name' => 'Luluk HF',
                'price' => '99.000',
                'isbn' => '978-602-694-098-8',
                'category' => 'Fiksi, Romantis',
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('books')->insert($books);
    }
}
