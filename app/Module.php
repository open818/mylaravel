<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
