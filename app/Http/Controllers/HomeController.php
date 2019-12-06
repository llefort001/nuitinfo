<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function landing()
    {
        return view('landing');
    }

    public function postHelpForm(Request $request)
    {
        $response = "Votre demande a bien été prise en compte";

        return view('help')->with(array("response"=>$response));
    }
    public function help()
    {
        return view('help');
    }
}
