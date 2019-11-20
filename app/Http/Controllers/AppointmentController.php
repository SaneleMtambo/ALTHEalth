<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;


class AppointmentController extends Controller
{
    //

    public function bookAppointment(Request $request)
    {
        
        $bookPoint= new  Appointment();
 
        $bookPoint->user_id = $request['user_id'];
        $bookPoint->hcp_id = $request['hcp_id'];
        $bookPoint->med_aid = $request['med_aid'];
        $bookPoint->maid_status = $request['maid_status'];
        $bookPoint->status = 'active';
        $bookPoint->time = $request['time'];
        $bookPoint->date = $request['date'];
        $bookPoint->detailSummary = $request['detailSummary'];
        $bookPoint->medication = $request['medication'];
$bookPoint->save();

return back();
    }


    public function acceptAppointment(Request $request){


        $accept = Appointment::where('id', $request->input('id'))->first();
$accept->status ="accepted";
$accept->save();

        return json_encode($accept);



    }


    public function declineAppointment(Request $request){


        $accept = Appointment::where('id', $request->input('id'))->first();
$accept->status ="Declined";
$accept->save();

        return json_encode($accept);



    }


    public function deleteAppointment(Request $request){

        $accept = Appointment::where('id', $request->input('id'))->delete();

        return back();

    }

}
