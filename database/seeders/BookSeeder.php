<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'the Lord Of Chaos',
            'author' => 'Vyke',
            'publisher' => 'Godwyn',
            'year' => '2024',
            'isbn' => '978-0-04-822993-3',
            'cover' => 'https://i.redd.it/arr7alcmtgyb1.jpg',
            'description' => 'born of the Lord of Chaos is caused by frenzied flames',
            'category' => 'Fantasy',
        ]);
    }
}
