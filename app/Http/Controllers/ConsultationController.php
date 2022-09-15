<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

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
        $a['title'] = $a['patient'];

        $consultation=Consultation::create($a);
    }

    public function show(Consultation $consultation)
    {
        $consultation = Consultation::all();

        return response()->json($consultation);
    }

    public function showUser($id, Consultation $consultation)
    {
        $consultation = Consultation::all();

        @auth('web');
        foreach ($consultation as $consult)
        {
            if($consult->id != $id){
                $consult->display = 'background';
                $consult->color = 'red';
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
        $consultation->update($request->all());

        return response()->json($consultation);
    }

    public function destroy($id)
    {
        $consultation = Consultation::find($id)->delete();

        return response()->json($consultation);
    }
}
