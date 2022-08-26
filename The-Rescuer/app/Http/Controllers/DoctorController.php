<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
   public function ViewUserHelpRequestsFunction(){
    if(Auth::id())
    {
        return view('doctor.ViewUserHelpRequest');
    }
    else{
        return view('auth.login');
    }
   }

}
