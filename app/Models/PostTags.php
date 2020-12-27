<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTags extends Model
{
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
