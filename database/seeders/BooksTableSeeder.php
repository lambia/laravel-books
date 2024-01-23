<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $books = [
            [
                "name" => "Guida galattica per autostoppisti",
                "author" => "Douglas Adams",
                "price" => "42.42",
                "description" => "Saga di fantascienza umoristica",
                "is_available" => true,
                "page_number" => 400,
                "isbn_code" => "424204242"
            ],
            [
                "name" => "Lo zen e l'arte della manutenzione della motocicletta",
                "author" => "P. Rising",
                "price" => "123.00",
                "description" => "Altro libro",
                "is_available" => true,
                "page_number" => 123,
                "isbn_code" => "568202"
            ]
        ];

        foreach ($books as $book) {
            $nuovoLibro = new Book();
            $nuovoLibro->name = $book["name"];
            $nuovoLibro->author = $book["author"];
            $nuovoLibro->price = $book["price"];
            $nuovoLibro->description = $book["description"];
            $nuovoLibro->is_available = $book["is_available"];
            $nuovoLibro->page_number = $book["page_number"];
            $nuovoLibro->isbn_code = $book["isbn_code"];
            $nuovoLibro->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $nuovoLibro = new Book();
            $nuovoLibro->name = $faker->sentence();
            $nuovoLibro->author = $faker->name();
            $nuovoLibro->price = "101.00"; //$faker->randomFloat(2);
            $nuovoLibro->description = $faker->sentence(100);
            $nuovoLibro->is_available = true;
            $nuovoLibro->page_number = $faker->randomNumber(3, false);
            $nuovoLibro->isbn_code = $faker->isbn13();
            $nuovoLibro->save();
        }
    }
}
