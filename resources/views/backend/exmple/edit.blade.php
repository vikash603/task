@extends('backend.layout.app')
@section('content')

     <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class=""></div>
        <div class="content-wrapper">
          
            <div class="content-body">
                 <!-- Simple Validation start -->
                


                <section class="tooltip-validations" id="tooltip-validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                       
                                        <form method="post" action="{{url('/')}}/exmple/update" class="needs-validation" novalidate="">
                                           

                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{$data->id}}">
                                            <div class="form-row">
                                                <div class="col-md-4 col-12 mb-3">
                                                    <label>User Name</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}" placeholder="User Name" required="">
                                                    
                                                </div>
                                                <div class="col-md-4 col-12 mb-3">
                                                    <label>Title</label>
                                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title" placeholder="Title" required="">
                                                   
                                                </div>
                                                <div class="col-md-4 col-12 mb-3">
                                                    <label>Date</label>
                                                    <input type="date" class="form-control" value="{{$data->date}}" id="date" placeholder="Date" name="date" required="">
                                                    
                                                </div>

                                                 <div class="col-md-12 col-12 mb-3">
                                                    
                                                   <textarea class="form-control" name="description" id="description"  rows="3" placeholder="Textarea">{{$data->description}}</textarea>
                                                   
                                                </div>
                                                <div class="new ">
<?php $j=0;?>
                                                    @foreach($data->product as $d)
<?php $j++; ?>

                                                    <div class="form-row titlerow">

                                                 <div class="col-md-4">
                                                    <label>Product Name</label>
                                                    <input type="text" class="form-control" id="name" value="{{$d->name}}" placeholder="name" name="pname[]" required="">
                                                    
                                                </div>

                                                 <div class="col-md-4">
                                                    <label>Price</label>
                                                    <input type="text" name="price[]" class="form-control" id="price" value="{{$d->price}}"placeholder="Price" required="">
                                                    
                                                </div>

                                                 <div class="col-md-4">
<br>
@if($j==1)
                                            <button type="button" class="btn btn-primary" onclick="add_more();">+</button>
                                                   @endif
@if($j!=1)
<button type="button" class="btn btn-primary" onclick="remove_tr(this);">X</button>         @endif


                                                </div>
                                                </div>

                                                @endforeach

                                                </div>

                                                


                                            </div>
                                            <br><br>
                                            <button class="btn btn-primary waves-effect waves-light " type="submit">Submit</button>
                                        </form>

                                      

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

               

                <!-- Input Validation end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

     

   @endsection

@section('js')
   <script>
function add_more()
{

   $(".new").append('<div class="form-row titlerow"><div class="col-md-4"><label>Product Name</label><input type="text" class="form-control" id="name" placeholder="name" required="" name="pname[]"></div><div class="col-md-4"><label>Price</label><input type="text" name="price[]" class="form-control" id="price" placeholder="Price" required=""></div><div class="col-md-4"><br><button type="button" class="btn btn-primary" onclick="remove_tr(this);">X</button></div></div>');

}

function remove_tr(clrt)
{
   
   $(clrt).parents('.titlerow').remove();
}

</script>

@endsection