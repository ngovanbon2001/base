<?php

use App\Models\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

Route::get('/test', function () {
    return User::all();
});

Route::get('test3', function () {
    dd(Redis::get('request_count'));
});

Route::get('create/role', function () {
    // $role = Role::create(['name' => 'writer']);
    // $permission = Permission::create(['name' => 'edit articles']);
    // $permission->assignRole($role);
    $user = User::find(1);
    $role = Role::where('name', 'writer')->first();

    $user->assignRole($role);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
