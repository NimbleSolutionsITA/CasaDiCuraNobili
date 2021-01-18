<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use Translatable;

    protected $translatable = ['name', 'excerpt', 'body', 'posizione'];


    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
    public function director()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function directorId(){
        return $this->belongsTo(Doctor::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function thumb()
    {
        $thumb = preg_replace('/(\.gif|\.jpg|\.png)/', '-thumb$1', $this->image);
        return  $thumb;
    }
    public function iconTag()
    {
        return '<i class="' . $this->icon . '"></i>';
    }
}
