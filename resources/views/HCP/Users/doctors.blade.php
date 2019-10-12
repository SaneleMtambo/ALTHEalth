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
                                <h4 class="box-title">Doctors </h4>

                                <div align="right">
                                <button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#largeModal">
                          Add Doctor
                      </button>
                    
                                </div>
                            </div>
                            @foreach($doctors as $doc)
                            <div align="center">
                            <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                                    <h5 class="text-sm-center mt-2 mb-1">{{$doc->name}}</h5>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> California, United States</div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#"><i class="fa fa-facebook pr-1"></i></a>
                                    <a href="#"><i class="fa fa-twitter pr-1"></i></a>
                                    <a href="#"><i class="fa fa-linkedin pr-1"></i></a>
                                    <a href="#"><i class="fa fa-pinterest pr-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                      @endforeach
                           
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
