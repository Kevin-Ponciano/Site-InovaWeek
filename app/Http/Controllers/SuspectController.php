<?php

namespace App\Http\Controllers;

use App\Models\Suspect;
use Illuminate\Http\Request;

class SuspectController extends Controller
{
    public function index(){
        $search = request('search');

        if($search) {
            $suspects = Suspect::where([
                ['name_suspect',
                    'like',
                    '%'.$search.'%']
            ])->get();
        }else{
            $suspects = Suspect::all();
        }
        return view('pages.search',['suspects'=> $suspects,'search'=> $search]);
    }

    public function dataAjax(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =Suspect::select("id","name_suspect")
                ->where('name_suspect','LIKE','%'.$search.'%')
                ->get();
        }
        return response()->json($data);
    }
}
