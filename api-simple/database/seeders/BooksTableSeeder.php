<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
			['title'=>'Introduction to Python Programming', 'created_at'=>now(), 'updated_at'=>now()],
			['title'=>'Compiler', 'created_at'=>now(), 'updated_at'=>now()],
			['title'=>'Database Management System', 'created_at'=>now(), 'updated_at'=>now()],
		]);
    }
}
