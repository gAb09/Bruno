<?php

/*
|--------------------------------------------------------------------------
| Section prefix "backend"
|--------------------------------------------------------------------------
|
|
*/
	/*----------------------  Menus  ----------------------------------*/
Route::group(array('prefix' => 'backend', 'before' => 'auth'), function() 
{
	Route::get('/', function(){
		return Redirect::to('backend/menus');
	});

	Route::resource('menus', 'MenuController');
	
});  // Fin de groupe prefix backend
