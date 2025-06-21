<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['title', 'icon', 'url', 'parent_id', 'order', 'placement'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')->orderBy('order');
    }
}

