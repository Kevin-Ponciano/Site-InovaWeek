<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BuscaController extends Controller
{
    public function index(){
        $search = request('search');

        if($search) {
            $users = User::where([
                ['name',
                'like',
                '%'.$search.'%']
            ])->get();
        }else{
            $users = User::all();
        }
        return view('search',['users'=> $users,'search'=> $search]);
    }
}
