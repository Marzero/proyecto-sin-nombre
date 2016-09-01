<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    //
    protected $table = "types";

    protected $fillable = ['type'];

    public function permissons()
    {
        return $this->belongsTo('App\permissions');
    }
}
