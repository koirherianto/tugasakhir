<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mindmap;

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
    $mindmaps = Mindmap::all();
    return view('index',compact('mindmaps'));
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\MindMapController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


Route::resource('mindmaps', App\Http\Controllers\MindmapController::class);