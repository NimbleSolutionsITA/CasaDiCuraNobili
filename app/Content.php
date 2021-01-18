<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use Translatable;

    protected $translatable = ['title', 'body'];

    public function gallery()
    {
        $dirname = "storage/gallery/";
        $gallery = glob($dirname."*.jpeg");
        return $gallery;
    }
}
