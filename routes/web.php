<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\AtletController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\KontingenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TandingController;
use App\Http\Controllers\EventMatchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


// Route untuk halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Route untuk login
Route::get('login', function () {
    return view('auth.login');
})->name('login');

// Proses login
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);

// Route untuk halaman registrasi
Route::get('register', function () {
    return view('auth.register');
})->name('register');

// Proses registrasi
Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// Route untuk dashboard dengan pengecekan autentikasi dan role
Route::get('/index', function () {
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->role == 'admin') {
            return redirect()->route('admin.index'); // Redirect ke index admin
        } elseif ($user->role == 'official') {
            return redirect()->route('official.index'); // Redirect ke index official
        }
    }
    return redirect()->route('login');
})->middleware('auth');

// Route untuk index admin
Route::get('/admin/index', function () {
    return view('admin.index'); // Harus sesuai dengan folder 'admin' dan file 'index.blade.php'
})
    ->name('admin.index')
    ->middleware('auth');

// Route untuk index official
Route::get('/official/index', function () {
    return view('official.index'); // Harus sesuai dengan folder 'official' dan file 'index.blade.php'
})
    ->name('official.index')
    ->middleware('auth');



// Route group untuk admin
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Dashboard admin
        Route::get('/index', [AdminController::class, 'index'])->name('index');
        
        // Route group untuk manajemen kontingen
        Route::prefix('manajemen')
        ->name('manajemen.')
        ->group(function () {
            Route::get('/', [ManajemenController::class, 'index'])->name('index');
            Route::get('/create', [ManajemenController::class, 'create'])->name('create');
            Route::post('/', [ManajemenController::class, 'store'])->name('store');
            Route::get('/{id}', [ManajemenController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [ManajemenController::class, 'edit'])->name('edit');
            Route::put('/{id}', [ManajemenController::class, 'update'])->name('update');
            Route::delete('/{id}', [ManajemenController::class, 'destroy'])->name('destroy');

            });
            
            // Route group untuk official
            Route::prefix('officials')
            ->name('officials.')
            ->group(function () {
                Route::get('/create/{kontingenId}', [OfficialController::class, 'create'])->name('create');
                Route::post('/store', [OfficialController::class, 'store'])->name('store');
                Route::get('/{id}/edit', [OfficialController::class, 'edit'])->name('edit');
                Route::put('/{id}', [OfficialController::class, 'update'])->name('update');
                Route::delete('/{id}', [OfficialController::class, 'destroy'])->name('destroy');
            });
        // Route untuk Atlet
        Route::prefix('atlets')
            ->name('atlets.')
            ->group(function () {
                Route::get('/create/{kontingenId}', [AtletController::class, 'create'])->name('create');
                Route::post('/store', [AtletController::class, 'store'])->name('store');
                Route::get('/{id}/edit', [AtletController::class, 'edit'])->name('edit');
                Route::put('/{id}', [AtletController::class, 'update'])->name('update');
                Route::delete('/{id}', [AtletController::class, 'destroy'])->name('destroy');
            });
    });

    Route::middleware('auth')
    ->prefix('official')
    ->name('official.')
    ->group(function () {

    Route::get('/index', [UserController::class, 'index'])->name('index');
    });
// Route untuk Kategori Tanding
Route::get('/admin/categories/tanding/{category_id}', [TandingController::class, 'index'])->name('admin.categories.tanding');

Route::get('/matches', [EventMatchController::class, 'index'])->name('matches.index');
Route::post('/matches/create-bracket', [EventMatchController::class, 'createBracket'])->name('admin.eventMatches.createBracket');
Route::post('/matches/{id}/update-winner', [EventMatchController::class, 'updateWinner'])->name('matches.updateWinner');


Route::get('/', [KontingenController::class, 'create'])->name('kontingen.create');
Route::post('/daftar-kontingen', [KontingenController::class, 'store'])->name('kontingen.store');