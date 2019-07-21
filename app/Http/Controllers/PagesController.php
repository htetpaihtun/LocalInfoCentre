<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('pages.index');
    }

    public function hotels(){
      return view('pages.hotels');
    }

    public function restaurants(){
      return view('pages.restaurants');
    }

    public function tours(){
      return view('pages.tours');
    }

    public function signup(){
      return view('pages.signup');
    }

    public function pagemanager(){
      return view('pages.pagemanager');
    }
}
