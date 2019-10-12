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
        $bookPoint->status = $request['status'];
        $bookPoint->time = $request['time'];
        $bookPoint->date = $request['date'];
        $bookPoint->medication = $request['medication'];
$bookPoint->save();

return back();
    }



}
