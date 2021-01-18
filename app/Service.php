<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Translatable;

    protected $translatable = ['name', 'excerpt', 'body'];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
    public function head()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function nurse()
    {
        return $this->belongsTo(Doctor::class);
    }
}
