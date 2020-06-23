<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Operation;
use App\moyen;
use App\destination;
use App\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
         $Clients = Operation::take(5)->get();
         $a = Client::all()->count();
         $b = destination::all()->count();
         $c = moyen::all()->count();
         $d =Operation::all()->count();

        return view('home',compact('Clients','a','b','c','d'));
    }


    public function priceindex()
    {
       
        return view('pages.prices');
    }


}
