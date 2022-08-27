<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Police_t;
use Illuminate\Support\Str;
use App\Models\User;


class PSController extends Controller
{
    public function AddPoliceFunction(){
        if (Auth::id()) {return view('PoliceStation.AddPolice');}
        else {return view('auth.login');}
    }



    public function PoliceListFunction(){
        if (Auth::id()) {
            $Police_t = Auth::user()->id;
            $Police_t = Police_t::where('PoliceStationID', $Police_t)->get();
            return view('PoliceStation.PoliceList', compact('Police_t'));
        }
        else {return view('auth.login');}
    }

    public function DeletePoliceFunction(){
        if (Auth::id()) {
            $Police_t = Auth::user()->id;
            $Police_t = Police_t::where('PoliceStationID', $Police_t)->get();
            return view('PoliceStation.deletepolice', compact('Police_t'));
        }
        else {return view('auth.login');}
    }
    public function RemovePoliceFunction($id)
    {

        if (Auth::id()) {


            $Police_t = Police_t::find($id);
            $Police_t->delete();
            return redirect()->back();
        } else {

            return view('auth.login');
        }
    }


    
    public function SubmitPoliceFunction(Request $request)
    {

        if (Auth::id()) {

            $police_t = new Police_t;
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
            $police_t->PoliceStationID = Auth::User()->id;
            $police_t->PoliceStationName = Auth::User()->firstname;

            $police_t->save();
            $password = Str::random(8);
            User::insert([

                'firstname'=>$request->first_name,
                'lastname'=>$request->last_name,
                'username'=>$request->username,
                'phone'=>$request->ContactNumber,
                'adress'=>$request->Address,
                'usertype'=>$request->usertype='Police',
                'gender'=>$request->gender,
                'email'=>$request->email,
                'dob'=>$request->DOB,
                'password'=>$request->password='12345678',


            ]);
            return redirect()->back()->with('success', 'Police Added Successfully');
        } else {
            return view('auth.login');
        }
    }


 
}
