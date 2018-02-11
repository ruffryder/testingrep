<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Photo extends Model
{
    protected $fillable = ['path'];
    protected $uploads = 'http://localhost/codehacking/public/images/';

    public function getPathAttribute($photo){
        return $this->uploads.$photo;
    }
    //
}
