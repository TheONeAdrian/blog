<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){

      $first = 'Francis';

      $people = [

        'Taylor Otwell',
        'Daylan Rees',
        'Eric Barnes'
      ];


      return view('pages.about', compact('first','people'));

    }

    public function contact(){

      return view('pages.contact');

    }

}
