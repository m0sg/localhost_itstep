<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function news() {
        return $this->belongsToMany('App\Models\News', 'news2tags');
    }
}

