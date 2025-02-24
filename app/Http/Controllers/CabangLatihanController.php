<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabangLatihanController extends Controller
{
    public function index() {
        return view('dashboard.cabanglatihan.index');
    }
}
