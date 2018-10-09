<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = [
        'admin_id', 'address',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
