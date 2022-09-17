<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('pages.calendar');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $a = $request->all();
        request()->validate(Consultation::$rules);


        if ($a['title'] == 'LIVRE') {
            $a['title'] = null;
        } else {
            $a['title'] = $a['patient'];
        }
        $consultation = Consultation::create($a);
    }

    public function show(Consultation $consultation)
    {
        $consultation = Consultation::all();

        return response()->json($consultation);
    }

    public function showUser($name, Consultation $consultation)
    {
        $consultation = Consultation::all();

        foreach ($consultation as $consult) {
            if ($consult->id != $name && $consult->patient != null) {
                $consult->display = 'background';
                $consult->color = 'red';
            } else {
                $consult->title = 'Minha Consuta';
            }
        }

        return response()->json($consultation);
    }

    public function edit($id)
    {
        $consultation = Consultation::find($id);

        return response()->json($consultation);
    }


    public function update(Request $request, Consultation $consultation)
    {
        request()->validate(Consultation::$rules);

        $a = $request->all();
        if ($a['title'] == 'LIVRE') {
            $a['title'] = null;
        } else {
            $a['title'] = $a['patient'];
        }
        $consultation->update($a);
        debug($a);

        return response()->json($consultation);
    }

    public function destroy($id)
    {
        $consultation = Consultation::find($id)->delete();

        return response()->json($consultation);
    }

    public function agenda(){
        $consults = Consultation::all();
        debug($consults);
        return view('pages.scheduling', ['consults' => $consults]);
    }
}
