<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class metasController extends Controller
{
    public function metas()
    {
        return view('metas');
    }
}
