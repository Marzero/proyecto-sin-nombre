<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.


Route::get('/', function () {
    return view('welcome');
});|


*/

Route::get('/', function () {
    return view('principal');
});
/*
Route::group(['prefix' => 'locations'], function(){
	/*
	Route::get('view/{location?}', function($location = "vacio"){
		echo $location;
	});
	Route::get('view/{id}',[
		'uses' 	=> 	'LocationController@view',
		'as'	=>	'locationsView'
	]);
});
*/
Route::group(['prefix' => 'admin'], function(){
	Route::resource('types', 'TypesController');
	Route::resource('locations', 'LocationsController');
	//rutas de eliminacion
	Route::get('types/{id}/destroy',[
		'uses' => 'TypesController@destroy',
		'as' => 'admin.types.destroy'
	]);
	Route::get('locations/{id}/destroy',[
		'uses' => 'LocationsController@destroy',
		'as' => 'admin.locations.destroy'
	]);
});
/*
route::group(['prefix'=>"locations"], function(){
//primer parametro nombre de ruta
	Route::resource('locations','UsersController');

});
/*
Route::get('locations/{x}', function ($locacionx){
	echo "esta es la seccion de locaciones";
});
*/

