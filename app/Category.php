<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use Translatable;

    protected $translatable = ['title', 'slug'];

    public function news() {
        return $this->hasMany(News::class);
    }
}
