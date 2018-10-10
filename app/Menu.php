<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable=
        [
            'name',
            'price',
            'photo'
        ];


    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
