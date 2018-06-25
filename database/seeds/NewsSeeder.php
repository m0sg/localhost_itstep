<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (News::count()  == 0){
            News::create([
                'images' => '1.jpg',
                'name' => 'News 1',
                'post' => 'litel post news 1',
                'all_post' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one',
            ]);
            News::create([
                'images' => '2.jpg',
                'name' => 'News 2',
                'post' => 'litel post news 2',
                'all_post' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one',
            ]);
            News::create([
                'images' => '3.jpg',
                'name' => 'News 3',
                'post' => 'litel post news 3',
                'all_post' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one',
            ]);
            News::create([
                'images' => '4.jpg',
                'name' => 'News 4',
                'post' => 'litel post news 4',
                'all_post' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one',
            ]);
        }
    }
}
