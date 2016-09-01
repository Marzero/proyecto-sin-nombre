<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $table = "locations";

    protected $fillable = ['X', 'Y'];

    public function profile()
    {
        return $this->belongsTo('App\profile');
    }
}
