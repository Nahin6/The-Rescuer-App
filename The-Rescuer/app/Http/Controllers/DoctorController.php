<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AppointmentT;
use App\Models\DoctorResponceT;
class DoctorController extends Controller
{
   public function ViewUserHelpRequestsFunction(){
    if(Auth::id())
    {
        $AppointmentT = AppointmentT::all()->where('status','Forward to a doctor');
        return view('doctor.ViewUserHelpRequest', compact('AppointmentT'));
    }
    else{
        return view('auth.login');
    }
   }
   public function GiveSolutionToUserFunction(){
    if(Auth::id())
    {

        return view('doctor.GiveSolutionToUser');
    }
    else{
        return view('auth.login');
    }
   }
   public function SubmitSolutionToUserFunction(Request $request){
    if(Auth::id())
    {
        $DoctorResponceT = new DoctorResponceT;
        $DoctorResponceT->MedicineName=$request->MedicineName;
        $DoctorResponceT->AddtionalMedicine	=$request->AddtionalMedicine;
        $DoctorResponceT->GuideLine	=$request->GuideLine;
        $DoctorResponceT->save();

        return redirect()->back()->with('success', 'Solution submitted');
    }
    else{
        return view('auth.login');
    }
   }

}


