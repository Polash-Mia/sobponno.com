@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
            
                    <h4 class="card-title mb-4">Edit Shipping</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
        
                    <form action="{{route('shipping.update',['id'=>$shipping->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Inside of Dhaka</label>
                            <div class="col-sm-9">
                              <input type="text" name="inside_dhaka" value="{{$shipping->inside_dhaka}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Out of Dhaka</label>
                            <div class="col-sm-9">
                              <input type="text" name="outside_dhaka" value="{{$shipping->outside_dhaka}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        
                        
        
        
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
        
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection