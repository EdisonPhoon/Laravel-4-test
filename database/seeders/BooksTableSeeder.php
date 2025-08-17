<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear the table
        DB::table('books')_>truncate();

        // Prepare the data
        $books = 
        [
            ['name' => 'Book1', 'price' => 1000, 'author' => 'Mike'],
            ['name' => 'Database Alchemy', 'price' => 800, 'author' => 'Archmagos Nonsensus']
        ];

        // Insert records
        foreach ($books as $books => $books) {
            \App\Book::create($books);
        }
    }
}
