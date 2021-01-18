<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use Translatable;

    protected $translatable = ['activity'];

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
    public function departments_director()
    {
        return $this->hasMany(Department::class, 'director_id');
    }
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    public function services_head()
    {
        return $this->hasMany(Service::class, 'head_id');
    }
    public function services_nurse()
    {
        return $this->hasMany(Service::class, 'nurse_id');
    }

    public function fullName()
    {
        $suffix = "";
        if ($this->gender == 'male' && $this->role == 'doctor') {
            $suffix = trans('app.dott');
        }
        if ($this->gender == 'female' && $this->role == 'doctor') {
            $suffix = trans('app.drssa');
        }
        if ($this->gender == 'male' && $this->role == 'nurse') {
            $suffix = trans('app.sig');
        }
        if ($this->gender == 'female' && $this->role == 'nurse') {
            $suffix = trans('app.sigra');
        }
        if ($this->gender == 'male' && $this->role == 'staff') {
            $suffix = trans('app.sig');
        }
        if ($this->gender == 'female' && $this->role == 'staff') {
            $suffix = trans('app.sigra');
        }
        $fullName = $suffix.$this->name.' '.$this->surname;
        return $fullName;
    }
    public function shortName()
    {
        $suffix = "";
        if ($this->gender == 'male' && $this->role == 'doctor') {
            $suffix = trans('app.dott');
        }
        if ($this->gender == 'female' && $this->role == 'doctor') {
            $suffix = trans('app.drssa');
        }
        if ($this->gender == 'male' && $this->role == 'nurse') {
            $suffix = trans('app.sig');
        }
        if ($this->gender == 'female' && $this->role == 'nurse') {
            $suffix = trans('app.sigra');
        }
        if ($this->gender == 'male' && $this->role == 'staff') {
            $suffix = trans('app.sig');
        }
        if ($this->gender == 'female' && $this->role == 'staff') {
            $suffix = trans('app.sigra');
        }
        $fullName = $suffix.$this->name[0].'. '.$this->surname;
        return $fullName;
    }

    public function getUrl()
    {
        return '/medici/' . $this->id . '/' . str_slug($this->fullname, '-');
    }

    public function getCv()
    {
        if($this->cv == "[]")
            return '<a href="">Non disponibile</a>';
        else
            return '<a href="/storage/' . (json_decode($this->cv))[0]->download_link . '" target="_blank">Scarica il CV</a>';
    }

    public function getPhotoUrl()
    {
        $url = $this->photo;

        if (!isset($url))
        {
            if ($this->gender == 'male')
                $url = 'doctors/anonimo.jpg';
            else
                $url = 'doctors/anonima.jpg';
        }
        return '/storage/' . $url;
    }

    public function sanitario() {
        return Doctor::all()->where('fullname', setting('informazioni-generali.direttore-sanitario'))->first();
    }

}

