<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Fantasy';
        $category->description = 'Speculative fiction that use imaginary characters set in fictional 
        universes inspired by mythology and folklore';
        $category->save();

        $category = new Category();
        $category->name = 'Horror';
        $category->description = 'Involves fiction in which plot and characters are tools used to elicit a 
        feeling of dread and terror';
        $category->save();

        $category = new Category();
        $category->name = 'Romance';
        $category->description = 'Romantic fiction is those which give primary focus around a love story 
        between two people, usually having an "emotionally satisfying and optimistic ending.';
        $category->save();
    }
}
