<?php

namespace App\Http\Controllers;

use App\Models\model_has_permission;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $patients= collect();
        $permissions = model_has_permission::select('model_id')->where([['permission_id','like','3']])->get();
        for ($i = 0; $i < $permissions->count(); $i++)
        {
            $user = User::find($permissions[$i]);
            $patients = $patients->concat($user);

        }

        return view('pages.dashboard',['patients' => $patients]);
    }
}
