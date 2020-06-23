<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    //
    protected $table = 'operations';

    public function c()
    {
        return $this->belongsTo('App\Client', 'clent_id');
    }

    public function m()
    {
        return $this->belongsTo('App\moyen', 'moyen_id');
    }

    public function de1()
    {
        return $this->belongsTo('App\destination', 'dest1');
    }

    public function de2()
    {
        return $this->belongsTo('App\destination', 'dest2');
    }
}
