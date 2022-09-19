<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Carbon\Carbon;
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
        $b = Consultation::find($a['id']);

        request()->validate(Consultation::$rules);


        if ($a['title'] == 'LIVRE') {
            $a['title'] = null;
        } else {
            $a['title'] = $a['patient'];
            $a['color'] = '#00bed8';
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
            if ($consult->patient != $name && $consult->patient != null) {
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
            $a['color'] = '#00bed8';
        }
        $consultation->update($a);


        return response()->json($consultation);
    }

    public function destroy($id)
    {
        $consultation = Consultation::find($id)->delete();

        return response()->json($consultation);
    }

    public function agenda()
    {
        $consults = Consultation::all();

        foreach ($consults as $consult) {
            $consult->start = Carbon::createFromFormat("Y-m-d H:i:s", $consult->start)->format("d/m/Y");
            $consult->end = Carbon::createFromFormat("Y-m-d H:i:s", $consult->end)->format("H:i");
        }
        return view('pages.scheduling', ['consults' => $consults]);
    }
}
