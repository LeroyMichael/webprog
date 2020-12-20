<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flowerscategories extends Model
{
    protected $fillable = [
    'flowercategoryname', 'flowercategoryphoto',
    ];




    public function flowers() {
        return $this->hasMany(Flowers::class, 'categories_id','id');
    }
    
}
