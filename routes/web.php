<?php

use App\Http\Controllers\Admin\{SuporteController};
use App\Http\Controllers\Controller;
use App\Http\Controllers\Igreja\CongregacaoController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/supports', [SuporteController::class, 'index'])->name('supports.index');
Route::get('/igreja', [CongregacaoController::class, 'consultarIgreja']);

?>