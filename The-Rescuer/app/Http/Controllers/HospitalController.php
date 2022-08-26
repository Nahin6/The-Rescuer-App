<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\doctorT;
use App\Models\AppointmentT;
use App\Models\AmbulanceT;
use App\Models\User;
use Google\Service\CloudSearch\Id;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use mail;
class HospitalController extends Controller
{
    // doctor form:
    public function AddDoctor(Request $request)
    {

        if (Auth::id()) {

            $doctorT = new doctorT;
            $doctorT->first_name = $request->first_name;
            $doctorT->last_name = $request->last_name;
            $doctorT->username = $request->username;
            $doctorT->HospitalName = $request->HospitalName;
            $doctorT->email = $request->email;
            $doctorT->ContactNumber = $request->ContactNumber;
            $doctorT->Address = $request->Address;
            $doctorT->Department = $request->Department;
            $doctorT->Position = $request->Position;
            $doctorT->DoctorDOB = $request->DoctorDOB;
            $doctorT->gender = $request->gender;
            $doctorT->hospital_ID = Auth::User()->id;

            $doctorT->save();
            $password = Str::random(8);
            User::insert([

                'firstname'=>$request->first_name,
                'lastname'=>$request->last_name,
                'username'=>$request->username,
                'phone'=>$request->ContactNumber,
                'adress'=>$request->Address,
                'usertype'=>$request->usertype='Doctor',
                'gender'=>$request->gender,
                'email'=>$request->email,
                'dob'=>$request->DoctorDOB,
                'password'=>$request->password='12345678',


            ]);
            return redirect()->back()->with('success', 'Doctor Added Successfully');
        } else {
            return view('auth.login');
        }
    }

    public function AddDoctorFunction()
    {
        if (Auth::id()) {

            return view('hospital.AddDoctorView');
        } else {
            return view('auth.login');
        }
    }
    public function ViewAppointmentFunction()
    {
        if (Auth::id()) {
            $AppointmentT = AppointmentT::all();
            return view('hospital.ViewReceivedHelpRequest', compact('AppointmentT'));
        } else {
            return view('auth.login');
        }
    }

    public function AppointDoctorFunction($id)
    {
        if (Auth::id()) {
            $AppointmentT = AppointmentT::find($id);
            $AppointmentT->status = 'Approved Please wait for doctor response';
            $AppointmentT->save();
            $doctorT = Auth::user()->id;
            $doctorT = doctorT::where('hospital_ID', $doctorT)->get();
            return view('hospital.AppointDoctorView', compact('doctorT'));
          
        } else {
            return view('auth.login');
        }
    }
    public function AddAmbulanceFunction()
    {
        if (Auth::id()) {

            return view('hospital.AddAmbulanceView');
        } else {
            return view('auth.login');
        }
    }

    public function AddAmbulanceSubmitButtonFunction(Request $request)
    {


        if (Auth::id()) {

            $AmbulanceT = new AmbulanceT;
            $AmbulanceT->AmbulanceRegNo = $request->AmbulanceRegNo;
            $AmbulanceT->DriverName = $request->DriverName;
            $AmbulanceT->DriverNumber = $request->DriverNumber;
            $AmbulanceT->HospitalName = Auth::user()->firstname;
            $AmbulanceT->hospital_id = Auth::user()->id;
            $AmbulanceT->save();

            return redirect()->back()->with('success', 'Ambulance Added Successfully');
        } else {
            return view('auth.login');
        }
    }

    public function SeeDoctorListFunction()
    {

        if (Auth::id()) {


            $doctorT = Auth::user()->id;
            $doctorT = doctorT::where('hospital_ID', $doctorT)->get();

            return view('hospital.SeeDoctorList', compact('doctorT'));
        } else {

            return view('auth.login');
        }
    }

    public function RemoveDoctorFunction($id)
    {

        if (Auth::id()) {


            $doctorT = doctorT::find($id);
            $doctorT->delete();
            return redirect()->back();
        } else {

            return view('auth.login');
        }
    }

    public function SeeAmbulanceListFunction()
    {

        if (Auth::id()) {


            $AmbulanceT = Auth::user()->id;
            $AmbulanceT = AmbulanceT::where('hospital_id', $AmbulanceT)->get();
            return view('hospital.SeeAmbulanceList' ,compact('AmbulanceT'));
        } else {

            return view('auth.login');
        }
    }

    public function RemoveAmbulanceFunction($id)
    {

        if (Auth::id()) {


            $AmbulanceT = AmbulanceT::find($id);
            $AmbulanceT->delete();
            return redirect()->back();
        } else {

            return view('auth.login');
        }
    }
   
}

