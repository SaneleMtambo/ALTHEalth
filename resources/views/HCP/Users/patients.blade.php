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
                                <h4 class="box-title">Patients </h4>
                                <div align="right"> <button  type="button" class="btn btn-secondary btn-sm"  data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-lightbulb-o"></i>&nbsp; Add Patient</button></div>
                            </div>
                            <table class="table table-centered table-striped"id="Patient_datatable">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                         <th>Email</th> 
                                                         <th>User Role</th>
                                                        <th>Action</th> 

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>
                            <div class="card-body"></div>
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

        <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Patient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card
                           <div>
                                <div class="form-group"><label for="company" class=" form-control-label">Name</label><input type="text" id="company"  class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Surname</label><input type="text" id="vat"  class="form-control"></div>
                                <div class="form-group"><label for="street" class=" form-control-label">Address</label><input type="text" id="street"  class="form-control"></div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group"><label for="city" class=" form-control-label">Address</label><input type="text" id="city"  class="form-control"></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country"  class="form-control"></div>
                            </div>
                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
