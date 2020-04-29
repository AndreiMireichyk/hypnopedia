<?php

namespace App\Models\Blog;

use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

class Article extends Model
{
    use Gutenbergable;
    use Sluggable;
    protected $guarded = [];

    protected $dates = ['created_at'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(ArticleCategory::class);
    }
}
