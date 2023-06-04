@extends('admin.master')



@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <h4 class="card-title mb-4">Profile Update</h4>
        
                    <form action="{{route('password.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                  
         
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0 ">
                                <input type="text" class="form-control form-control-user mb-3"
                                    id="exampleInputPassword" name="name" placeholder="User Name">
                            </div>
                            <div class="col-sm-12 mb-3 mb-sm-0 ">
                                <input type="password" class="form-control form-control-user mb-3"
                                    id="exampleInputPassword" name="password" placeholder="Password">
                            </div>
                            <div class="col-sm-12">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleRepeatPassword" name="password_confirmation" placeholder="Repeat Password">
                            </div>
                        </div>
                        
                           
                        <div class="form-group row ">
                            <div class="col-sm-9">
        
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection