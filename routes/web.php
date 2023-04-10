<?php
//  echo phpinfo();die;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\OpenChatAI;
use App\Http\Controllers\Subscription;


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
// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('prev-chat',[OpenChatAI::class,'prevChat'])->name('prev-chat');

Route::get('all-chats/user/{ip_address}',[OpenChatAI::class,'allchats'])->name('all-chats');

Route::resource('contact','ContactController');

Route::get('subscription',[Subscription::class,'index']);

Route::get('/open-chat',[OpenChatAI::class,'index']);
Route::post('/open-chat',[OpenChatAI::class,'result'])->name('open-chat');

Route::group(['prefix' => 'admin'], function() {
     Route::group(['middleware' => 'guest'], function(){
        Route::get('/login', [AdminController::class,'login'])->name('admin.login');
        Route::post('/login', [AdminController::class,'adminlogin'])->name('admin.login');
     });

     Route::group(['middleware' => 'admin.auth'], function()
     {
        Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('/logout',[AdminController::class,'logoutAdmin'])->name('admin.logout');
        Route::get('/change-password',[AdminController::class,'changePass'])->name('admin.change-password');
        Route::post('/change-password',[AdminController::class,'changePassPost'])->name('admin.change-password');
        Route::get('/Regusers',[AdminController::class,'RegUsers'])->name('admin.users');
        Route::get('/update-status/{user_id}',[AdminController::class,'blockusers'])->name('admin.update.status');
     });
});