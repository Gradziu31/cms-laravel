<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'title',
        'opis',
        'slug',
        'content',
        'category',
        'seo_title',
        'seo_description',
        'parent_id',
        'user_id',
        'thumb',
        'seodesc',
    ];
    //relacja page_id od Menu_items do Pages (id) 
    // $test = new App\Pages
    // $test->find(1)->parent (zwraca menu items od strony)
    public function parent()
    {
        return $this->belongsTo('App\Pages', 'parent_id', 'id');
    }
    public function children(){
        return $this->hasMany('App\Pages', 'parent_id');
    }
}
