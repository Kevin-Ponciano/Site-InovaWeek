<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function index()
    {
        return view('evento.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Evento $evento)
    {
        //
    }


    public function edit(Evento $evento)
    {
        //
    }


    public function update(Request $request, Evento $evento)
    {
        //
    }


    public function destroy(Evento $evento)
    {
        //
    }
}
