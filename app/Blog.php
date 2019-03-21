<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'title',
        'opis',
        'thumb',
        'slug',
        'content',
        'category',
        'seo_title',
        'seo_description',
        'user_id',
    ];
}
