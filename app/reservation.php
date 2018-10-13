<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    //
    protected $fillable = [
        'restaurant_id','date', 'time', 'guests','phone','message','status'
    ];

    public  function user(){
        return $this->belongsTo('App\User');
    }
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

}
