<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name',
                           'plot', 
                           'release_date' 
    ];

    public function actor() {
      return $this -> belongsTo(Actor::class);
}
}
