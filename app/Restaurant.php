<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = [
         'address',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
