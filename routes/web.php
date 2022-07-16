<?php
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\NewsProfile;
use App\Http\Controllers\UserProfile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentProfile;

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

Route::get('/', [NewsProfile::class, 'headlineList']);

Route::get('news_tech', [NewsProfile::class, 'techList']);

Route::get('feedback', [NewsProfile::class, 'feedbackList']);

Route::get('sign_in', [UserProfile::class, 'sign_in_page']);

Route::get('register', [UserProfile::class, 'register_page']);

Route::get('feedback', function () {
    $comments = DB::table('comments')->select('username','subject', 'comment_body')->get();
    return view('/feedback', compact('comments'));
});

Route::post('/users', [UserProfile::class, 'store']);

Route::post('/sign_out', [UserProfile::class, 'sign_out']);

Route::post('/users/authenticate', [UserProfile::class, 'authenticate']);

Route::post('comment', [CommentProfile::class, 'commentList']);

// Route::get('/newsProfile',[NewsProfile::class, 'list']);

// Route::get('/newsProfile', function () {
//     return Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey=618518684c3a4b948ce36d93ea6e72c9')->body();
// });