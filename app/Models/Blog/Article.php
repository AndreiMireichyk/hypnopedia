<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

class Article extends Model
{
    use Gutenbergable;

    protected $guarded = [];

    protected $dates = ['created_at'];
}
