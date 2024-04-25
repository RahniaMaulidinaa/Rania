<?php

use App\Http\Controllers\UserController;
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
});

Route:: get('/' , function () {
    return 'welome';
});

Route::get('/Nurfazlyana', function (){
    echo'<h1 align="Haiii!!!</h1>';
    echo'<p align="center">Welcome To Tawau Sabah Malaysia</p>';
$backgroundImage = 'url("https://media.istockphoto.com/id/1211957420/id/vektor/kamar-hitam-dan-putih.jpg?s=612x612&w=0&k=20&c=KxJ9ZWq_WsJTMXLOkIpxa7wninsCDSymNhw_rnet-bU=")';
    return "<html>
                <head>
                    <style>
                        body {
                            background-image: $backgroundImage;
                            background-size: cover;
                            background-position: center;
                            height: 100vh;
                            margin: 0;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: #fff; /* warna teks di atas background */
                            font-size: 24px;
                        }
                    </style>
                </head>
                <body>
                    <div>Nurfazlyana</div>
                </body>
            </html>";
});

Route::get('/temp', function () {
    return view('index');
});
Route::get('/user', [UserController::class,'index'])->name('latihan1');