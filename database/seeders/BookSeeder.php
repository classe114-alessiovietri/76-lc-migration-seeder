<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Svuota la tabella
        Book::truncate();

        // $booksData = [
        //     [
        //         'title' => '1984',
        //         'author' => 'George Orwell',
        //     ],
        //     [
        //         'title' => 'La fattoria degli animali',
        //         'author' => 'George Orwell',
        //     ],
        // ];

        // foreach ($booksData as $singleBookData) {
        //     $book = new Book();
        //     // Ne riempio le colonne
        //     $book->title = $singleBookData['title'];
        //     $book->author = $singleBookData['author'];
        //     // Lo salvo in persistenza
        //     $book->save();
        // }

        // Riempi la tabella
        for ($i = 0; $i < 50; $i++) {
            // Istanzio il model
            $book = new Book();
            // Ne riempio le colonne
            $book->title = fake()->words(rand(1, 5), true);
            $book->author = fake()->name();
            $book->vote_avg = fake()->randomFloat(2, 0, 9);
            $book->votes_num = rand(100, 1500);
            // Lo salvo in persistenza
            $book->save();
        }
    }
}
