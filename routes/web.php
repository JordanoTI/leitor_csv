<?php

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

Route::get('/', 'HomeController@home')->name('site.home');

Route::get('/login', 'LoginController@login')->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', 'ClientesController@clientes')->name('app.clientes');
    Route::get('/dashboard', 'DashboardController@dashboard')->name('app.dashboard');
    Route::get('/historico', 'HistoricoController@historico')->name('app.historico');
});

// Route::get('/origem/{ftp}/{usuario}/{senha}/{porta}', function (string $ftp, string $usuario, string $senha, int $porta) {
//     echo "$ftp - $usuario - $senha - $porta";
// })->where('porta', '[0-9]+');
