<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuessController;

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
    // if (!request()->cookie('splash')) {
    //     cookie()->queue(cookie()->forever('splash', 'true'));
    //     return redirect('/splash');
    // }
    return view('landing');
});

Route::get('/splash', function () {
    return view('splash');
});

Route::post("/guess", [GuessController::class, "create"]);

Route::get("/gewinnspiel/{uuid}", function($uuid) {
    session(["source" => $uuid]);
    return redirect("/gewinnspiel");
});

Route::get("{screen}", function ($screen) {
    return view("landing");
});

