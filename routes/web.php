<?php

use App\Http\Controllers\CategoryController;
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
Route::get('/usertest', function () {
    $user = User::findOrFail(1);
    dd($user);
});
// Lavarel query builder
Route::get('/querytest', function () {
    $user = DB::table('test')->where('id', 1)->first();
    dd($user);
});
Route::get('/category', [CategoryController::class, 'index'])->name("category.list");
Route::get('/category/create', [CategoryController::class, 'create'])->name("category.create");
Route::post('/category', [CategoryController::class, 'store'])->name("category.store");

Route::get("/category/{categoryId}/edit", [CategoryController::class, 'edit'])->name('category.edit');
Route::put("/category/{categoryId}", [CategoryController::class, 'update'])->name('category.update');

Route::delete("/category/{categoryId}", [CategoryController::class, 'destroy'])->name('category.delete');
Route::get('/category/{cateId}', [CategoryController::class, 'show'])->name("category.show");