<?php

use Illuminate\Support\Facades\Route;
use App\Models\Population;
use App\Models\User;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PopulationController;
use App\Http\Controllers\HighchartController;

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
});
Route::get('/chart', [HighchartController::class, 'handleChart']);
Route::get('list', [PeopleController::class,'show']);
Route::get('/index', [ChartController::class,'handleChart']);