<?php

use App\Http\Controllers\Admin\{SuporteController};
use App\Http\Controllers\Controller;
use App\Http\Controllers\Igreja\CongregacaoController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/supports/create', [SuporteController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SuporteController::class, 'show'])->name('supports.show');
Route::post('/supports', [SuporteController::class, 'store'])->name('supports.store');
Route::get('/supports', [SuporteController::class, 'index'])->name('supports.index');
Route::get('/igreja', [CongregacaoController::class, 'consultarIgreja']);

?>