@extends('backend.layout.app')
@section('content')





    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-6">
                            
                            
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
               

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        
                                        <div class="table-responsive">
<table class="table zero-configuration mytable">
                                             <thead>
                                                    @foreach($exm as $e)
                                                    <tr>
                                                        
                                                        <h3>Name:- {{$e->name}}</h3><br>
                                                        <h3>Title:- {{$e->title}}</h3><br>
                                                        <h3>Description:- {{$e->description}}</h3><br>
                                                        <h3>Date:- {{$e->date}}</h3><br>
                                                        
                                                    </tr>
                                                    @endforeach
                                                    
                                                </thead>
                                            </table>
                                            <table class="table zero-configuration mytable">


                                                


                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Product Name</th>
                                                        <th>Price</th>
                                                        
                                                    </tr>
                                                </thead>


                                               

                                                <thead>
                                                    @foreach($product as $p)
                                                    <tr>
                                                        <th>{{$p->id}}</th>
                                                        <th>{{$p->name}}</th>
                                                        <th>{{$p->price}}</th>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </thead>
                                              
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>





@endsection


