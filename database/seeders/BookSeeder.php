<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $categories_id = Category::all()->pluck('id');

            $book = new Book();
            $book->name = 'Book 1';
            $book->author = "James Dean";
            $book->publication_date = "2018-05-23";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 2';
            $book->author = "Sarah Thomes";
            $book->publication_date = "2020-02-23";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 3';
            $book->author = "Mia Jones";
            $book->publication_date = "2010-02-02";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 4';
            $book->author = "John Hardy";
            $book->publication_date = "1985-10-24";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 5';
            $book->author = "Michael Joe";
            $book->publication_date = "2017-01-20";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 6';
            $book->author = "Monica L. Hollow";
            $book->publication_date = "2005-12-24";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 7';
            $book->author = "Johann L. M";
            $book->publication_date = "1974-12-05";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 8';
            $book->author = "Rose Evans";
            $book->publication_date = "2010-02-07";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 9';
            $book->author = "Lauren Maso";
            $book->publication_date = "2012-04-20";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 10';
            $book->author = "Jay Usman";
            $book->publication_date = "2013-10-14";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();   
            
            
            
            $book = new Book();
            $book->name = 'Book 11';
            $book->author = "Jack White";
            $book->publication_date = "2013-09-25";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 12';
            $book->author = "M. P. Clark";
            $book->publication_date = "2002-12-30";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();

            $book = new Book();
            $book->name = 'Book 13';
            $book->author = "Andy Quinn";
            $book->publication_date = "1998-04-28";
            $book->is_available = 1;
            $book->category_id = $categories_id->random();
            $book->save();   
          
            
    }
}
