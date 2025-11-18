<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class legalController extends Controller
{
        public function faq():View
        {
            return view('legals.faq');
        }


        public function cookies():View
        {
            return view('legals.cookies');
        }
}
