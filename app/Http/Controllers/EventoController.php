<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
// Carbon ajuda a formatar um determinado dado
use Carbon\Carbon;

class EventoController extends Controller
{

    public function index()
    {
        return view('event.calendar');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        request()->validate(Evento::$rules);
        $event=Evento::create($request->all());
    }


    public function show(Evento $event)
    {
        //
        $event = Evento::all();
        return response()->json($event);
    }


    public function edit($id)
    {
        //
        $event = Evento::find($id);

        // $event->start = Carbon::createFromFormat('Y-m-d H:i:s', $event->start)->format('Y-m-d');
        // $event->end = Carbon::createFromFormat('Y-m-d H:i:s', $event->end)->format('Y-m-d');

        return response()->json($event);
    }


    public function update(Request $request, Evento $event)
    {
        //
        request()->validate(Evento::$rules);
        $event->update($request->all());

        return response()->json($event);
    }


    public function destroy($id)
    {
        //
        $event = Evento::find($id)->delete();

        return response()->json($event);
    }
}
