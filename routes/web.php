<?php

use App\HCP;
use App\GA;
use App\User;
use App\Appointment;
use App\Supplement;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){

$supplements = Supplement::paginate(10);

    return view('/Dashboard')->with(compact('supplements'));
   });
   
   

Route::get('/doc-dashboard', function () {
    return view('doctor');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route::post('/register','RegisterController@create');


Route::get('Customer-dashboard', function() { 

    $supplements = Supplement::paginate(10);

    return
    view('Customer/dashboard')->with(compact('supplements'));

});


Route::get('Patient-dashboard', function() { 



    $supplements = Supplement::paginate(10);

   
    return
    view('Patient/dashboard')->with(compact('supplements'));

});

Route::get('customer-Appointment', function() { 

    return
    view('Customer/Appointments/appointments');

});

Route::get('customer-history', function() { 

    return
    view('Customer/Appointments/history');

});



Route::get('Patient-Appointment', function() { 

    return
    view('Patient/Appointments/appointments');

});

Route::get('Patient-history', function() { 

    return
    view('Patient/Appointments/history');

});


Route::get('GA-dashboard', function() { 

    return
    view('GA/dashboard');

});


Route::get('HCP-dashboard', function() { 

    return
    view('HCP/dashboard');

});



//super admin pages

Route::get('Super-dashboard', function() { 

    return
    view('SuperAdmin/dashboard');

});


Route::get('Super-Customers', function() { 

    return
    view('SuperAdmin/Users/customers');

});



Route::get('Super-Orders', function() { 

    return
    view('SuperAdmin/Supplements/orders');

});


Route::get('Super-Stock', function() { 

    return
    view('SuperAdmin/Supplements/stock');

});


Route::get('Super-Appointments', function() { 

    return
    view('SuperAdmin/Appointments/appointments');

});


Route::get('Super-Doctors', function() { 

    $doctors = App\HCP::all(); 
    return
    view('SuperAdmin/Users/doctors')
    ->with(compact('doctors'));

});


Route::get('Super-Patients', function() { 

    return
    view('SuperAdmin/Users/patients');

});


Route::get('Super-Secretary', function() { 

    return
    view('SuperAdmin/Users/secretary');

});



//HCP Pages


Route::get('HCP-Customers', function() { 

    return
    view('HCP/Users/customers');

});



Route::get('HCP-Orders', function() { 

    return
    view('HCP/Supplements/orders');

});


Route::get('HCP-Stock', function() { 

    return
    view('HCP/Supplements/stock');

});


Route::get('HCP-Appointments', function() { 

    return
    view('HCP/Appointments/appointments');

});



Route::get('HCP-Patients', function() { 

    return
    view('HCP/Users/patients');

});


Route::get('HCP-Secretary', function() { 

    return
    view('HCP/Users/secretary');

});



//GA Pages


Route::get('GA-Customers', function() { 

    return
    view('GA/Users/customers');

});



Route::get('GA-Orders', function() { 

    return
    view('GA/Supplements/orders');

});


Route::get('GA-Stock', function() { 

    return
    view('GA/Supplements/stock');

});


Route::get('GA-Appointments', function() { 

    return
    view('GA/Appointments/appointments');

});


Route::get('GA-Manage_Appointments', function() { 

    return
    view('GA/Appointments/Manage_appointments');

});

//Manage_Appointments

Route::get('GA-Patients', function() { 

    return
    view('GA/Users/patients');

});


Route::get('GA-Secretary', function() { 

    return
    view('GA/Users/secretary');

});


Route::get('get-all-users', function() { 


  $users = User::where('user_role','Patient')->get();

  return  datatables()->of($users)
  ->addColumn('action', function ($users) {
    return '<a href="#edit-'.$users->id.'" class="btn btn-xs btn-primary" onclick="launch_editusermodal('.$users->id.')"  ><i class="glyphicon glyphicon-edit"></i> Accept</a> | <a href="#edit-'.$users->id.'" class="btn btn-xs btn-danger" onclick="delete_user('.$users->id.')"  ><i class="glyphicon glyphicon-edit"></i> Decline</a>';
})
      ->editColumn('id', '{{$id}}')
      ->removeColumn('password')
      ->make(true);


});


Route::get('get-all-customers', function() { 


    $users = User::where('user_role','Customer')->get();
  
    return  datatables()->of($users)
    ->addColumn('action', function ($users) {
      return '<a href="#edit-'.$users->id.'" class="btn btn-xs btn-primary" onclick="launch_editusermodal('.$users->id.')"  ><i class="glyphicon glyphicon-edit"></i> Accept</a> | <a href="#edit-'.$users->id.'" class="btn btn-xs btn-danger" onclick="delete_user('.$users->id.')"  ><i class="glyphicon glyphicon-edit"></i> Decline</a>';
  })
        ->editColumn('id', '{{$id}}')
        ->removeColumn('password')
        ->make(true);
  
  
  });


  
Route::get('get-all-secretaries', function() { 


    $users = User::where('user_role','GA')->get();
  
    return  datatables()->of($users)
    ->addColumn('action', function ($users) {
      return '<a href="#edit-'.$users->id.'" class="btn btn-xs btn-primary" onclick="launch_editusermodal('.$users->id.')"  ><i class="glyphicon glyphicon-edit"></i> Accept</a> | <a href="#edit-'.$users->id.'" class="btn btn-xs btn-danger" onclick="delete_user('.$users->id.')"  ><i class="glyphicon glyphicon-edit"></i> Decline</a>';
  })
        ->editColumn('id', '{{$id}}')
        ->removeColumn('password')
        ->make(true);
  
  
  });
  





  //get-all-supplements
  Route::get('get-all-supplementshcp', function() { 

   // $get_company_id= GA::where('user_id' ,Auth::user()->id)->first();where('ga_id',$get_company_id->id)->get();

  $requests = Supplement::all();

//return json_encode($requests);

  return  datatables()->of($requests)
  ->addColumn('action', function ($requests) {
    return '<a href="#edit-'.$requests->id.'" class="btn btn-xs btn-primary" onclick="launch_editusermodal('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#edit-'.$requests->id.'" class="btn btn-xs btn-danger" onclick="delete_supplement('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Delete</a>';
})
      ->editColumn('id', '{{$id}}')
      ->removeColumn('password')
      ->make(true);


});



  Route::get('get-all-supplements', function() { 


    $get_company_id= HCP::where('user_id' ,Auth::user()->id)->first();

  $requests = Supplement::where('hcp_id',$get_company_id->id)->get();

//return json_encode($requests);

  return  datatables()->of($requests)
  ->addColumn('action', function ($requests) {
    return '<a href="#edit-'.$requests->id.'" class="btn btn-xs btn-primary" onclick="launch_editusermodal('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#edit-'.$requests->id.'" class="btn btn-xs btn-danger" onclick="delete_user('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Delete</a>';
})
      ->editColumn('id', '{{$id}}')
      ->removeColumn('password')
      ->make(true);


});


Route::get('get-all-appointmentsHistory', function() { 


   // $get_company_id= HCP::where('user_id' ,Auth::user()->id)->first();

  $requests = Appointment::where('user_id',Auth::user()->id)->get();

//return json_encode($requests);

  return  datatables()->of($requests)
  ->addColumn('action', function ($requests) {
    return ' | <a href="#edit-'.$requests->id.'" class="btn btn-xs btn-danger" onclick="deleteAppointment('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Cancel</a>';
})
      ->editColumn('id', '{{$id}}')
      ->removeColumn('password')
      ->make(true);


});

Route::get('get-all-appointments', function() { 


    $get_company_id= HCP::where('user_id' ,Auth::user()->id)->first();

  $requests = Appointment::where('hcp_id',$get_company_id->id)->get();

//return json_encode($requests);

  return  datatables()->of($requests)
  ->addColumn('action', function ($requests) {
    return '<a href="#edit-'.$requests->id.'" class="btn btn-xs btn-primary" onclick="acceptAppointment('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Accept</a> | <a href="#edit-'.$requests->id.'" class="btn btn-xs btn-danger" onclick="declineAppointment('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Decline</a>';
})
      ->editColumn('id', '{{$id}}')
      ->removeColumn('password')
      ->make(true);


});
//
Route::get('get-all-appointmentshcp', function() { 


    //$get_company_id= GA::where('user_id' ,Auth::user()->id)->first();

  $requests = Appointment::all();

//return json_encode($requests);

  return  datatables()->of($requests)
  ->addColumn('action', function ($requests) {
    return '<a href="#edit-'.$requests->id.'" class="btn btn-xs btn-primary" onclick="acceptAppointment('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Accept</a> | <a href="#edit-'.$requests->id.'" class="btn btn-xs btn-danger" onclick="declineAppointment('.$requests->id.')"  ><i class="glyphicon glyphicon-edit"></i> Decline</a>';
})
      ->editColumn('id', '{{$id}}')
      ->removeColumn('password')
      ->make(true);


});