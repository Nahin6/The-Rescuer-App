<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AppointmentT;
use App\Models\DoctorResponceT;
use App\Models\AmbulanceReqT;
use App\Models\AssignAmbulanceT;
use App\Models\User;
class UserController extends Controller
{

    //nahin
    public function MakeAppointmentFunction(Request $request)
    {
        if (Auth::id()) {
            $AppointmentT = new AppointmentT;
            $AppointmentT->PatientName = Auth::user()->username;
            $AppointmentT->Address = Auth::user()->adress;
            $AppointmentT->ContactNumber = Auth::user()->phone;
            $AppointmentT->Age = $request->Age;
            $AppointmentT->AppointmentType = $request->AppointmentType;
            $AppointmentT->Problems = $request->Problems;
            $AppointmentT->status = 'Pending';
            $AppointmentT->gender = Auth::user()->gender;


            $AppointmentT->save();
            return redirect()->back()->with('confirmation', 'Appointment Sent Successfully Please wait for Doctor Response');
        } else {
            return view('auth.login');
        }
    }


    //nahin
    public function DoctorHelpFunction()
    {
        if (Auth::id()) {
            return view('user.GetDoctorHelp');
        } else {
            return view('auth.login');
        }
    }

    //ratul
    public function PoliceHelpFunction()
    {
        if(Auth::id())
        {

            return view('user.PoliceHelp');
        }
        else
        {
            return view('auth.login');
        }
    }

    //bristy
    public function FireHelpFunction()
    {
        if(Auth::id())
        {

            return view('user.FireHelp');
        }
        else
        {
            return view('auth.login');
        }
    }

    public function AddFriendsFunction()
    {
        if(Auth::id())
        {

            return view('user.AddFriends');
        }
        else
        {
            return view('auth.login');
        }
    }

    //nahin
    public function CHeckHelpStatusFunction()
    {
        if (Auth::id()) {
            $username = Auth::user()->username;
            $AppointmentT = AppointmentT::where('PatientName', $username)->get();
            $DoctorResponceT= DoctorResponceT::all();
            return view('user.ViewDoctorHelpStatus', compact('AppointmentT','DoctorResponceT'));
        } else {
            return view('auth.login');
        }
    }

    //nahin
    public function CancelRequestFunction($id)
    {

        if (Auth::id()) {
            $AppointmentT = AppointmentT::find($id);
            $AppointmentT->delete();
            return redirect()->back();
        } else {
            return view('auth.login');
        }
    }
    public function AmbulanceHelpFunction()
    {
        if (Auth::id()) {

            return view('user.GetAmbulanceHelp',);
        } else {
            return view('auth.login');
        }
    }
    public function RequestForAmbulanceFunction(Request $request)
    {
        if (Auth::id()) {

            $AmbulanceReqT = new AmbulanceReqT;

            $AmbulanceReqT->username = Auth::user()->username;
            $AmbulanceReqT->ContactNumber = Auth::user()->phone;
            $AmbulanceReqT->Location =  $request->Location;
            $AmbulanceReqT->AmnulanceStatus	='Pending';
            $AmbulanceReqT->save();



            return redirect()->back()->with('confirmation', 'Your Request was successfully sent to a Hospital Please Wait');
        } else {
            return view('auth.login');
        }
    }
    public function CHeckAmbulanceHelpStatusFunction()
    {
        if (Auth::id()) {
            $username = Auth::user()->username;
            $AmbulanceReqT = AmbulanceReqT::where('username', $username)->get();
            $AssignAmbulanceT = AssignAmbulanceT::all();
            return view('user.TrackAmbulance', compact('AmbulanceReqT','AssignAmbulanceT'));
        } else {
            return view('auth.login');
        }
    }
}


