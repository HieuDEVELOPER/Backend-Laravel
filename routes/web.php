<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Giaiptb1;
use Illuminate\Http\Request;
use App\Http\Controllers\Calculato;
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
//     return view('welcome');
// });

Route::resource('cars', CarController::class);

Route::get('ShowCars', [CarController::class, 'index']);
Route::get('Create', [CarController::class, 'create'])->name('cars.create');
Route::post('cars', [CarController::class, 'store'])->name('cars.store');
Route::get('cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('cars/{car}', [CarController::class, 'update'])->name('cars.update');
Route::get('cars/{ShowCars}', [CarController::class, 'show']);
Route::get('/cars/delete/{car}', [CarController::class, 'destroy'])->name('cars.delete');

// Route::get('Ptb1', function(){
//     return view('Ptb1');
// });

// Route::post('Ptb1', function(Request $req){
//     $a=$req->input('a');
//     $b=$req->input('b');
//     if($a==0)
//         if($b==0)
//             $kq="pt co vo so nghiem";
//         else 
//             $kq="phuong trinh vo nghiem";
//     else $kq="phuong trinh co nghiem x=".$b/$a;
//     return view('Ptb1',compact('a','b','kq'));
// })->name('Ptb1.post');
// Route::post('Ptb1',[Giaiptb1::class,'Giai'])->name('Ptb1.post');


// Route::get('tinh',[Calculato::class,'showForm'])->name('number');
// Route::post('Calculato',[Calculato::class,'Giai'])->name('Calculato.post');
// Route::get('Calculato',[Calculato::class,'showForm'])->name('Calculato.post');
