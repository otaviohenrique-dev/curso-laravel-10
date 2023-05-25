<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function index (Support $support){
        $supports = $support->all();
        return view('admin/supports/index', compact('supports'));
    }

    public function create (){
        return view('admin/supports/create');
    }
}
