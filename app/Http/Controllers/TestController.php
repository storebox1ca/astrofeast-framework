<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
