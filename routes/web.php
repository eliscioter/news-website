<?php
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsProfile;
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

Route::get('/', [NewsProfile::class, 'list']);

// Route::get('/newsProfile',[NewsProfile::class, 'list']);

// Route::get('/newsProfile', function () {
//     return Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey=618518684c3a4b948ce36d93ea6e72c9')->body();
// });