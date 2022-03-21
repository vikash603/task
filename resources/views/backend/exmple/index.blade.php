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
                            <h3 class="content-header-title float-left mb-0"><a href="{{url('/')}}/exmple/create" class="btn   btn-success">Create Category</a></h3>
                            
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
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>User Name</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Date</th>


                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>


                                                <thead>
                                                    @foreach($exmple as $ex)
                                                    <tr>

                                                        

                                                        <th>{{$ex->id}}</th>
                                                        <th>{{$ex->name}}</th>
                                                        <th>{{$ex->title}}</th>
                                                        <th>{{$ex->description}}</th>
                                                        <th>{{$ex->date}}</th>

                                                        <th><a href="{{url('/')}}/exmple/view/{{$ex->id}}" class="btn btn-primary">View</a></th>

                                                        <th><a href="{{url('/')}}/exmple/edit/{{$ex->id}}" class="btn btn-primary">Edit</a></th>



                                                        
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


