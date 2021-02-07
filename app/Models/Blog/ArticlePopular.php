<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class ArticlePopular extends Model
{
    protected $guarded = [];

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function scopeLang($builder)
    {
        $builder->where('lang', app()->getLocale());
        return $builder;
    }
}
