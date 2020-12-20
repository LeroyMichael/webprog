<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flowers extends Model
{
    protected $fillable = [
        'categories_id', 'flowername', 'flowerprice', 'flowerdescription', 'descriptionflowerphoto'
    ];



    public function flowerscategories() {
        return $this->belongsToMany(Flowerscategories::class, 'categories_id','id');
    }
}
