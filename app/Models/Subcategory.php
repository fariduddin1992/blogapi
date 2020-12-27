<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $fillable =[
        'name','category_id','slug','image'
  
      ];
    public function categories()
    {
        return $this->belongsTo('App\Models\Categories','id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
