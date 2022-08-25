<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoliceStationController extends Controller
{
    public function AddPoliceFunction(Request $request)
    {

        if (Auth::id()) {
            return view('auth.register');

            
            //return redirect()->back()->with('success', 'Doctor Added Successfully');
        } else {
            return view('auth.login');
        }
    }
}
