<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'quijote',
            'published_year' => 1500
        ]);

        DB::table('books')->insert([
            'title' => 'quijote1',
            'published_year' => 1501
        ]);

    }
}
