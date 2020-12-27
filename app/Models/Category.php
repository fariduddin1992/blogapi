<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable =[
        'name',
        'image',
        'slug'
    ];

    public function subcategories()
    {
        return $this->hasMany('App\Models\Subcategory', 'category_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
