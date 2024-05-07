<?php
use App\Http\Controllers\cuscontroller;
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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('designtool', function () {
    if (Session::has('email')) {
        return view('designtool');
    } else {
        return redirect('login');
    }


});
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::get('logout', [cuscontroller::class, 'logout']);
Route::post('Login', [cuscontroller::class, 'login']);
Route::post('design', [cuscontroller::class, 'design']);
Route::post('Register', [cuscontroller::class, 'register']);
Route::view('price', 'price');
Route::view('success', 'success');
Route::post('Price', [cuscontroller::class, 'store']);
Route::post('checkout', [cuscontroller::class, 'check']);
Route::post('/placeOrder', [cuscontroller::class, 'placeOrder']);