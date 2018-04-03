<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ongkir;

class OngkirController extends Controller
{
    public function calculate(Request $request)
    {
        return Ongkir::calculate($request->all());
    }
}
