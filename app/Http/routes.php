<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Input;
use App\Saving;

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::get('ajax-period', function(){
	$period_id = (int) Input::get('period_id');
	$savings = array();
	//$savings = Saving::where('code', '=', $period_id)->get();
	$assets = Saving::assets()->where('code', '=', $period_id)->get();
	$expenses = Saving::expenses()->where('code', '=', $period_id)->get();
	$savings["assets"] = $assets;
	$savings["expenses"] = $expenses;
	return Response::json($savings);
});
Route::resource('tasks', 'TasksController');
Route::resource('savings', 'SavingsController');
