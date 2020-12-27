<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // public function tags()
    // {
    //     // return 1;
    //     return $this->hasMany(PostTags::class);
    // }
    public function tags()
    {
        // return 1;
        return $this->hasMany('App\Models\PostTags','post_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
