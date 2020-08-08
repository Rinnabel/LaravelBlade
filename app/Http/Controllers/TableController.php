<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function tabel1() {
        return view('tabel1');
    }

    public function tabel2() {
        return view('tabel2');
    }
}
