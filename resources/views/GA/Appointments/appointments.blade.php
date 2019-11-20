@extends('GA')

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
                        
                            <div class="col-lg-12">
                            <div class="card">
                            <div class="card-header">
                                <strong>Book an Appointment</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form id="uploadForm" action="api/patient/bookAppointment" method="post" enctype="multipart/form-data" class="form-horizontal">
                                  @csrf
                                  <input type="hidden" name="user_id" id="user_id"value="{{Auth::user()->id}}"/>
                                  <input type="hidden" name="hcp_id" id="hcp_id"value="1"/>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Medical Aid</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="med_aid" name="med_aid"  class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="date" name="date" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Time</label></div>
                                        <div class="col-12 col-md-9"><input type="time" id="Time" name="Time" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Summary of Patients Condition</label></div>
                                        <div class="col-12 col-md-9"><textarea name="detailSummary" id="detailSummary" rows="9" placeholder="summary....." class="form-control"></textarea></div>
                                    </div>
                                 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Medication</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <input type="checkbox" id="medication" name="medication" value="option1" class="form-check-input">Option 1
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="medication" name="medication" value="option2" class="form-check-input"> Option 2
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="medication" name="medication" value="option3" class="form-check-input"> Option 3
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div>
                        <!-- <div class="card">
                            <div class="card-header">
                                <strong>Inline</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form action="#" method="post" class="form-inline">
                                    <div class="form-group"><label for="exampleInputName2" class="pr-1  form-control-label">Name</label><input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control"></div>
                                    <div class="form-group"><label for="exampleInputEmail2" class="px-1  form-control-label">Email</label><input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control"></div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div> -->
                    </div>
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
@endsection
