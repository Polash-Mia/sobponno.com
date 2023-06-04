@extends('admin.master')



@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <h4 class="card-title mb-4">Add Couriers </h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        
                    <form action="{{route('couriers.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                  
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Couriers Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" name="city" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">zone</label>
                            <div class="col-sm-9">
                              <input type="text" name="zone" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Charge</label>
                            <div class="col-sm-9">
                              <input type="number" name="charge" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>                          
                        <div class="form-group row justify-content-end">
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