<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests;
use App\Event;
use App\Ville ;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('indexEvent')->with(compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('createEvent')->with([
          'villes' => $villes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request)
    {
      $event = new Event;
      $event->nomEvenement = $request->input('TitleEventCE');
      $event->descriptionEvent = $request->input('DescriptionEventCE');
      $event->nbMaxInscrits = $request->input('maxinscCE');
      $event->ville_id = $request->input('lieueventCE');
      $event->dateDeb = $request->input('dateDebEventCE');
      $event->dateFin = $request->input('dateFinEventCE');
      $event->EvenementPayant = $request->input('eventpayantCE');
      $event->lienSitePayment= $request ->input('sitepaiementCE');

      $event->save();

      return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::where('idEvent', $id)->first()->get();
        return view('showEvent')->with(compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('editEvent')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $event = Event::find($id);
      $event->nomEvenement = $request->input('TitleEventCE');
      $event->descriptionEvent = $request->input('DescriptionEventCE');
      $event->nbMaxInscrits = $request->input('maxinscCE');
      $event->dateDeb = $request->input('dateDebEventCE');
      $event->dateFin = $request->input('dateFinEventCE');
      $event->EvenementPayant = $request->input('eventpayantCE');
      $event->lienSitePayment= $request ->input('sitepaiementCE');

      $event->save();

      return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
