<?php

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\Tags;
use App\Models\News2Tags;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $this->call('UserTableSeeder');
        $this->call(NewsSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}

//class NewsSeeder extends Seeder
//{
//
//    public function run()
//    {
//        DB::table('news')->delete();
//
//        news::create([
//            'images' => 'src image 1',
//            'name' => 'News 1',
//            'post' => 'litel post news 1',
//            'all_post' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one',
//        ]);
//
//        news::create([
//            'images' => 'src image 2',
//            'name' => 'News 2',
//            'post' => 'litel post news 2',
//            'all_post' => ' of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of .',
//        ]);
//
//        news::create([
//            'images' => 'src image 3',
//            'name' => 'News 3',
//            'post' => 'litel post news 3',
//            'all_post' => 'ssor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsumin their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
//        ]);
//    }
//}