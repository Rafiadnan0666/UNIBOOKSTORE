<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function (Request $request) {
        $cari = $request->get('search');
        $buku = Buku::where('nama_buku', 'like', "%$cari%")->get();
        return view('dashboard', compact('buku'));
    })->name('dashboard');
    Route::get('/pengadaan', function (Request $request) {
        $buku = Buku::orderBy('stok', 'ASC')->get()->take(1);
        return view('pengadaan', compact('buku'));
    })->name('pengadaan');

    Route::get('/admin', function (Request $request) {
        $buku = Buku::all();
        $penerbit = Penerbit::all();
        return view('admin', compact('buku',"penerbit"));
    })->name('admin');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/penerbit', PenerbitController::class);
    Route::resource('/buku', BukuController::class);
});

require __DIR__ . '/auth.php';
