<?php

namespace App\Models\Blog;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

class ArticleCategory extends Model
{
    use Gutenbergable;

    use Sluggable;

    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeLang($builder)
    {
        $builder->where('lang', app()->getLocale());
        return $builder;
    }

    public function articles(){
        return $this->belongsToMany(Article::class)->orderBy('id','desc');
    }

    public function lastFourArticles(){
        return $this->belongsToMany(Article::class)->take(4)->orderBy('id','desc');
    }
}
