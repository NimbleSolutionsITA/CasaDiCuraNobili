<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use Translatable;

    protected $translatable = ['title', 'body'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function excerpt($max_length = 140, $cut_off = '...', $keep_word = false)
    {
        $body = strip_tags($this->body);

        if(strlen($body) <= $max_length) {
            return $body;
        }

        if(strlen($body) > $max_length) {
            if($keep_word) {
                $text = substr($body, 0, $max_length + 1);

                if($last_space = strrpos($text, ' ')) {
                    $text = substr($text, 0, $last_space);
                    $text = rtrim($text);
                    $text .=  $cut_off;
                }
            } else {
                $text = substr($body, 0, $max_length);
                $text = rtrim($text);
                $text .=  $cut_off;
            }
        }

        return strip_tags($text);
    }

    public function imageUrl($position = null) {

        if($this->image) {
            if ($position)
                return asset("storage/".preg_replace('/(\.gif|\.jpg|\.png)/', '-'.$position.'$1', $this->image));
            else
                return  asset("storage/".$this->image);
        }

        else {
            if ($position)
                return '/images/news/' . $this->category->slug . '-' . $position . '.jpg';
            else
                return '/images/news/' . $this->category->slug . '.jpg';
        }
    }
}
