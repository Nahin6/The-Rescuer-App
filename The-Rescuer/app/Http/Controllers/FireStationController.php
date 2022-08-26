<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Police_t;
use App\Models\FireFighter_t;
use Illuminate\Support\Str;
use App\Models\User;

class FireStationController extends Controller
{
    public function AddFirefightersFunction(){
        
        return view('FireStation.AddFirefighters');
    }

    
    public function SubmitFirefightersFunction(Request $request)
    {

        if (Auth::id()) {

            $police_t = new FireFighter_t;
            $police_t->last_name = $request->last_name;
            $police_t->first_name = $request->first_name;
            $police_t->username = $request->username;
            $police_t->email = $request->email;
            $police_t->ContactNumber = $request->ContactNumber;
            $police_t->Address = $request->Address;
            $police_t->Department = $request->Department;
            $police_t->Position = $request->Position;
            $police_t->DOB = $request->DOB;
            $police_t->gender = $request->gender;
            $police_t->FireStationID = Auth::User()->id;
            $police_t->FireStationName = Auth::User()->firstname;

            $police_t->save();
            $password = Str::random(8);
            User::insert([

                'firstname'=>$request->first_name,
                'lastname'=>$request->last_name,
                'username'=>$request->username,
                'phone'=>$request->ContactNumber,
                'adress'=>$request->Address,
                'usertype'=>$request->usertype='FireFighter',
                'gender'=>$request->gender,
                'email'=>$request->email,
                'dob'=>$request->DOB,
                'password'=>$request->password='12345678',


            ]);
            return redirect()->back()->with('success', 'Fire Fighter Added Successfully');
        } else {
            return view('auth.login');
        }
    } 

}
