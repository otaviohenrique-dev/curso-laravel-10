<?php

namespace App\Http\Controllers\Igreja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CongregacaoController extends Controller
{
    public function consultarIgreja(){
        return view('igreja.statusigreja');
    }
}
