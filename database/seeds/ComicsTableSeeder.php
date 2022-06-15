<?php

use Illuminate\Database\Seeder;
use App\Comic;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comic){
            $newComic = new Comic();
            $newProduct->title =$comics      ['title'];
            $newProduct->description =$comics['description'];
            $newProduct->image =$comics      ['thumb'];
            $newProduct->price =$comics      ['price'];
            $newProduct->series =$comics     ['series'];
            $newProduct->sale_date =$comics  ['sale_date'];
            $newProduct->type =$comics       ['comic book'];
            $newProduct->save();


        }
    }
}
