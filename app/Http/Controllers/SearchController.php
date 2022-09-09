<?php

namespace App\Http\Controllers;

use App\Models\Suspeita;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $search = request('search');

        if($search) {
            $sintomas = Suspeita::where([
                ['name_suspect',
                'like',
                '%'.$search.'%']
            ])->get();
        }else{
            $sintomas = Suspeita::all();
        }
        return view('search',['sintomas'=> $sintomas,'search'=> $search]);
    }

    public function dataAjax(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =Suspeita::select("id","name_suspect")
                ->where('name_suspect','LIKE','%'.$search.'%')
                ->get();
        }
        return response()->json($data);
    }
}
