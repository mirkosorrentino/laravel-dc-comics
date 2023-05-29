<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');

        foreach ($comics_array as  $single_comic) {
            $comic = new Comic();
            
            $comic->type = $single_comic['type'];
            $comic->title = $single_comic['title'];
            $comic->series = $single_comic['series'];
            $comic->description = $single_comic['description'];
            $comic->thumb = $single_comic['thumb'];
            $comic->price = $single_comic['price'];
            $comic->sale_date = $single_comic['sale_date'];
            $comic->save();
        }
    }
}
