@extends('customer')

@section('content')
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">R<span class="count">23569</span></div>
                                            <div class="stat-heading">Stock</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">3435</span></div>
                                            <div class="stat-heading"> Shopping Cart </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">349</span></div>
                                            <div class="stat-heading">Templates</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">2986</span></div>
                                            <div class="stat-heading">Patients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="animated fadeIn">
                <div class="row">
@foreach($supplements as $supplement)
                   <div class="col-md-4">
                   <a href="\login"><div class="card">
                            <img class="card-img-top" src="images/medical.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"></p> 
                                <p class="card-text">Discription :{{$supplement->description}}</p>
                                <p class="card-text">Stock level :{{$supplement->stock_level}}</p>
                                <p class="card-text">Price :R{{$supplement->cost_incl}}</p>
                            </div>
                        </div></a>
                    </div>
                  @endforeach

                 
         
                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
          </div>
          </div>
          <div class="text-center">
                {{ $supplements->links() }}
           </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
@endsection
