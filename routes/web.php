<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Team;
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    // Get the first team that logged in (earliest login time)
    $winner = Team::whereNotNull('login_time')
                  ->orderBy('login_time', 'ASC')
                  ->first();

    // Fetch leaderboard sorted by login time
    $leaderboard = Team::whereNotNull('login_time')
                       ->orderBy('login_time', 'ASC')
                       ->get();

    return view('dashboard', compact('winner', 'leaderboard'));
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
