<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = "contacts";

    protected $fillable =  ['tipo', 'user_id', 'profile_id'];

    public function profile()
    {
        return $this->hasOne('App\profile');
    }

    public function user(){
    	return $this->belongsTo('App\user');
    }
}


/*
Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('tipo', ['padre','madre','hijo(a)','hermano(a)','amigo(a)','abueo(a)','tio(a)']);
            $table->integer('user_id')->unsigned();
            $table->integer('profile_id')->unsigned();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->timestamps();
        });
*/