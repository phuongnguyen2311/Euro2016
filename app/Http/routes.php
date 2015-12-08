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

use App\UserDraw;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});


Route::post('/userdraw', function (Request $request) {
	
    $userdraw = new UserDraw();
    $userdraw->name = $request->name;
    $userdraw->email = $request->email;
    $userdraw->group_name = $request->group_name;
     $userdraw->save();
    return redirect('/');
});
