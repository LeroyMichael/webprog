<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'flowercategoryname', 'flowercategoryphoto'
    ];

    public function flowers() {
        return $this->belongsToMany('App\Flowers');
    }
}
