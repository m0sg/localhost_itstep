<?php

use Illuminate\Database\Seeder;
use App\Models\Tags;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (Tags::count()  == 0){
            Tags::create([
                'tag_name' => 'тег 1',
            ]);
            Tags::create([
                'tag_name' => 'тег 2',
            ]);
            Tags::create([
                'tag_name' => 'тег 3',
            ]);
            Tags::create([
                'tag_name' => 'тег 4',
            ]);
        }
        $news = App\Models\News::find(1);
        $news->Tags()->attach([1, 2, 3]);

        $news = App\Models\News::find(2);
        $news->Tags()->attach([2, 3]);

        $news = App\Models\News::find(3);
        $news->Tags()->attach([3, 4]);

        $news = App\Models\News::find(4);
        $news->Tags()->attach([1, 3, 4]);
    }
}
