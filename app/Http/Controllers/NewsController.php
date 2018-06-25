<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use App\Models\News;
use Image;


class NewsController extends Controller
{
    public function show_news()
    {
        $all_news = news::all();



//
//
//        foreach($all_news as $news) {
//            $img = Image::cache(function ($image) use ($news) {
//                $image->make("upload/" . $news->images)->resize(500, null, function ($constraint) {
//                    $constraint->aspectRatio();
//                })->save('cache/' . $news->images);
//            }, 10, true);
//        }





        return view('news', ['all_news' => $all_news]);
   }



}






