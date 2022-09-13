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
        request()->validate(Consultation::$rules);
        $consultation=Consultation::create($request->all(),$request->overlap = false);
    }

    public function show(Consultation $consultation)
    {
        $consultation = Consultation::all();

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
