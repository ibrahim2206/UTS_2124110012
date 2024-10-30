<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis2;
abstract class Controller
{
    public function index()
    {
        $penulis2 = Penulis2::all();
        return view('penulis2.index', compact('penulis2'));
    }
}
