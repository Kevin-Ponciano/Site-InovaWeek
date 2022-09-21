<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\model_has_permission;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $patients = collect();
        $permissions = model_has_permission::select('model_id')->where([['permission_id','like','3']])->get();
        for ($i = 0; $i < $permissions->count(); $i++)
        {
            $user = User::find($permissions[$i]);
            $patients = $patients->concat($user);

        }

        $consultations = Consultation::all();
        $today = getdate()[0];
        $consults = collect();
        $aux = collect();

       for($i = 0; $i < $consultations->count(); $i++) {
            $date = new DateTime($consultations[$i]->start);
            $date = intval($date->format('U'));
            if ($date >= $today){
                $a = Consultation::find($consultations[$i]);
                $a[0]->start = Carbon::createFromFormat("Y-m-d H:i:s", $a[0]->start)->format("d/m/Y");
                $a[0]->end = Carbon::createFromFormat("Y-m-d H:i:s", $a[0]->end)->format("H:i");
                $consults = $consults->concat($a);
            }
        }

        return view('pages.dashboard',['patients' => $patients, 'consults' => $consults]);
    }
}
