<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function historico()
    {
        return view('app.historico');
    }
}
