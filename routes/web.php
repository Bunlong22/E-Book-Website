<?php

use App\Models\Test;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/testmodel', function () {
    $testing = Test::findOrFail(1);
    echo ($testing->name);
    echo "<br/>" . ($testing->description);
    echo "<br/>" . ($testing->done);
});
Route::get('/usertest',function(){
    $user = User::findOrFail(1);
    dd($user);
});
Route::get('/querytest',function(){
    $user = DB::table('test')->where('id', 1)->first();
    dd($user);
});