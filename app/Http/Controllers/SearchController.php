<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class SearchController extends Controller
{
    public function search(Request $request){
      $events = Event::where('nomEvenement', 'LIKE', '%'.$request->input('title').'%')->get() ;
      return view('search')->with(compact('events'));
    }
}
