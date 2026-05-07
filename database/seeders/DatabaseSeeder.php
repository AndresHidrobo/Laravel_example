<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Editorial;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory(10)->create();

        Editorial::factory(10)->create();

        Book::factory(20)->create();
    }
}
