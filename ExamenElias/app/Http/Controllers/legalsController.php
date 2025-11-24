<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;

// creamos el controlador de varias acciones para legals 
class legalsController extends Controller
{
    public function cookies(): View
    {
        return view('legals.cookies');
    }

    public function privacity(): View
    {
        return view('legals.privacity');
    }
}
