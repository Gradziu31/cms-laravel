<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_items extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'name',
        'hide_menu',
        'page_id'
    ];
}
