<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = "profiles";

    protected $fillable = ['nombres', 'apellidos', 'ci', 'telefono', 'direccion', 'foto', 'location_id'];

    public function location()
    {
        return $this->hasOne('App\location');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function contact()
    {
        return $this->belongsTo('App\contact');
    }
}

/*

$table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('ci');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('foto');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
*/