<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

   /** Apollo home-Page */
    public function Home(){
        return view('Pages.Home.index');
    }

    public function index()
    {
        return view('Pages.Home.index');
    }
}