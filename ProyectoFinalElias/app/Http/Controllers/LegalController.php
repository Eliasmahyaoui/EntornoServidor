<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\view;


class LegalController extends Controller
{
    public function privacidad(): View
    {
        return view('legal.privacidad');
    }

    public function cookies(): View
    {
        return view('legal.cookies');
    }
    public function contacto(): View
    {
        return view('legal.contacto');
    }
}
