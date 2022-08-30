<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function home()
    {
        return view('home',[]);
    }
}
