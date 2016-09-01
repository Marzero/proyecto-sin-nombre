<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    protected $table = "permissions";

    protected $fillable = ['permiso', 'tipo_id'];

    public function type()
    {
        return $this->belongsTo('App\types');
    }
}
