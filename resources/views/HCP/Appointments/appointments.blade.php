@extends('HCP')

@section('content')
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
               
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Appointments </h4>
                            </div>
                           
                            <div class="card-body"></div>
                            <table class="table table-centered table-striped"id="appointment_data">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>ID</th>
                                                        <th>Summary</th>
                                                        <th>Reason</th>
                                                         <th>Medical</th> 
                                                         <th>Medical Aid Type</th>
                                                        <th>Action</th> 

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>

                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
          
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
     
@endsection
