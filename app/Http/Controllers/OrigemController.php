<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrigemController extends Controller
{
    public function origem()
    {
        var_dump($_GET);
        return view('app.origem');
    }
}
