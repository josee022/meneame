<?php


use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ProfileController;
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

Route::resource('noticias', NoticiaController::class);

Route::get('/cambiar_imagen/{noticia}', [NoticiaController::class, 'cambiar_imagen'])
    ->name('noticias.cambiar_imagen')->whereNumber('noticia');

Route::post('/cambiar_imagen/{noticia}', [NoticiaController::class, 'guardar_imagen'])
->name('noticias.guardar_imagen')->whereNumber('noticia');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('comentarios', ComentarioController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
