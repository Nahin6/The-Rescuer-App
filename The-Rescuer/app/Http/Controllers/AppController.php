<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AppointmentT;
use App\Models\doctorT;
class AppController extends Controller
{
    public function LoginFunction()
    {
            $usertype= Auth::user()->usertype;

            if ($usertype=='1') {
            return view('admin.admin');
                }

            if ($usertype=='Police') {
            return view('police.PoliceDashboard');
                }

            if ($usertype=='PoliceStation') {
                return view('PoliceStation.PoliceStationDashboard');
                    }

            if ($usertype=='0') {
                $doctorT =doctorT::all();
            return view('user.user', compact('doctorT'));

                }

            if ($usertype=='Doctor') {
            return view('doctor.doctor');
            }
            if ($usertype=='FireFighter') {
                return view(' FireFighters.FIreFighterDashboard');
                }

           
            if ($usertype=='Hospital') {
                $AppointmentT =AppointmentT::all();
                $doctorT =DoctorT::all();
                return view('hospital.HospitalDashboard',compact('AppointmentT','doctorT'));
                }

            if ($usertype=='FireStation') {
            return view('FireStation.FireStationDashboard');
            }
            else{
                return view('Dashboard.home');
            }
    }
  }

