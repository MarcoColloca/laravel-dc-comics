<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */

    public function getPrice($string){
        
        return floatval(str_replace('$','', $string));

    }


    public function run(): void
    {
        
        $comics = config('comics');

        foreach ($comics as $index => $comic) {

            $new_comic = new Comic;

            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $this->getPrice($comic['price']);
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            
            $new_comic->save();
            //dump($new_comic);
        }


    }
}
