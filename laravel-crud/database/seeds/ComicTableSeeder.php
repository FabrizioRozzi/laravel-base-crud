<?php
use App\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comic = config('comic');
        //dump($array_comic);
        foreach($array_comic as $comic){
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->slug = Str::slug($new_comic->title, '-');
            $new_comic->thumb = $comic['thumb'];
            $new_comic->description = $comic['description'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            //dump($new_comic);
            $new_comic->save();
        }
    }
}
