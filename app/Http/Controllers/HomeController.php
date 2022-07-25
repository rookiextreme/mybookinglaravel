<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @description Homepage of website
     *
     * @param Request $request
     * @return Factory|View|Application
     */
   // public function index(Request $request): Factory|View|Application
   //  {
   //      return view('homepage', [
   //          'message' => 'home page'
   //      ]);
   //  }

    protected function authenticated(Request $request, $user) {
	 	return redirect('/dashboard');
	} 

	public function muka_page(){
		return view('index');
	}

    public function bilik(){
        return view('room');
    }

    public function lokasi(){
        return view('location');
    }

    public function bangunan(){
        return view('building');
    }
}