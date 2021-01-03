<?php
use App\Http\Controllers\PostsController;
// use App\Models\Article;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');

Route::get('/about', function () {
    return view('about', ['articles' => App\Models\Article::take(2)->latest()->get()]);});
});

Route::get('/todo-list', [App\Http\Controllers\TodoController::class, 'index']);
Route::put('/todo-list/{todo}/complete', [App\Http\Controllers\TodoController::class, 'complete'])->name('todo-list');
Route::put('/todo-list/{todo}/incomplete', [App\Http\Controllers\TodoController::class, 'incomplete'])->name('todo-list-incomplete');
Route::post('/todo-list/create', [App\Http\Controllers\TodoController::class, 'create']);
Route::get('/todo-list/{todo}/edit', [App\Http\Controllers\TodoController::class, 'edit'])->name('todo-list-edit');
Route::put('/todo-list/{todo}/edit', [App\Http\Controllers\TodoController::class, 'update'])->name('todo-list-update');
Route::post('/todo-list/{todo}/delete', [App\Http\Controllers\TodoController::class, 'delete'])->name('todo-list-delete');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/crisps', [App\Http\Controllers\CrispController::class, 'index']);
Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create']);
Route::post('/blog', [App\Http\Controllers\BlogController::class, 'store']);
Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'show']);
Route::get('/blog/{id}/edit', [App\Http\Controllers\BlogController::class, 'edit']);
Route::get('/blog/{id}/edit', [App\Http\Controllers\BlogController::class, 'edit']);
Route::put('/blog/{id}', [App\Http\Controllers\BlogController::class, 'update']);

Route::get('/fakertest',function(){
    $faker = Faker\Factory::create();
    $limit = 10;
    for ($i = 0; $i < $limit; $i++) {
    echo nl2br ('Name: ' . $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No: ' . $faker->phoneNumber . "\n");
    }
    });


Route::get('/players', [App\Http\Controllers\PlayersController::class, 'index']);
Route::get('/gameweek', [App\Http\Controllers\GameweekController::class, 'index']);







