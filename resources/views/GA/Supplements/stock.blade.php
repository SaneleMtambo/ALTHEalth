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
                            <div class="card-body">
                                <h4 class="box-title">Supplements</h4>
                         
                           <div align="right">
                            <button  class="btn-secondary" data-toggle="modal" data-target="#exampleModal">Add Supplements</button>
                            </div>
                         <br>
                            <table class="table table-centered table-striped"id="supplement_data">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th>ID</th>
                                                        <th>description</th>
                                                        <th>cost_exc</th>
                                                         <th>perc_incl</th> 
                                                         <th>cost_patient</th>
                                                         <th>napi_code</th>
                                                         <th>stock</th>
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
     


     <!-- modal -->
     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
      <div class="card">
                            <div class="card-header">
                                <strong>Add Supplements</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form id="uploadForm" action="api/HCP/addstock" method="post" enctype="multipart/form-data" class="form-horizontal">
                                  @csrf
                                  <input type="hidden" name="ga_id" id="user_id"value="{{Auth::user()->id}}"/>
                                  <input type="hidden" name="hcp_id" id="hcp_id"value="1"/>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Cost Excl</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="cost_exc" name="cost_exc"  class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Cost Incl</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="cost_incl" name="cost_incl" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Perc Incl</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="perc_incl" name="perc_incl" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Cost Patient</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="cost_patient" name="cost_patient"  class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Stock Level</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="stock_level" name="stock_level"  class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Invoice ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="invoice_id" name="invoice_id" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Supplier ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="supplier_id" name="supplier_id" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Mini Levels</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="mini_levels" name="mini_levels" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Napi Code</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="napi_code" name="napi_code" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Discription</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="description" name="description" class="form-control"><small class="help-block form-text"></small></div>
                                    </div> 
                                 
                                    
                               
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Save Changes
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Close
                                </button>
                            </div>
                        </div>
                        </form>
      </div>

    </div>
  </div>
</div>
@endsection
