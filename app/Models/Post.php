<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function author()
    {
        return $this->belongsTo(User::class);
    }


    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        if(! is_null($this -> image))
        {
            $imagePath = public_path() . "/img/" .$this -> image;
            if(file_exists($imagePath))
            $imageUrl =$this->image;
        }
        return $imageUrl;
    }
// date er value ta ki vabe pachhe??
    public function getDateAttribute($value){
        return $this -> created_at ->diffForHumans();
    }


    public function scopeLatestFirst(){

        return $this -> orderBy('created_at','desc');
    }
}
