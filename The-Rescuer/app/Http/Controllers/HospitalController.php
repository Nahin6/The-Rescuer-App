<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\doctorT;
use App\Models\AppointmentT;
use App\Models\AmbulanceT;
use Illuminate\Support\Facades\DB;
class HospitalController extends Controller
{

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


            $doctorT->save();
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
            $doctorT = doctorT::all();
            // return view('hospital.AppointDoctorView', compact('doctorT'));
            return redirect()->back();
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
            $AmbulanceT->hospital_id = $request->Auth::user()->id;
            $AmbulanceT->save();

            return redirect()->back()->with('success', 'Ambulance Added Successfully');
        } else {
            return view('auth.login');
        }
    }

}
