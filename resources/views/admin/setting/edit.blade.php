@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
            
                    <h4 class="card-title mb-4">Edit Setting</h4>
        
                    <form action="{{route('setting.update',['id'=>$setting->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Logo </label>
                            <div class="col-sm-9">
                                <input type="file" name="logo" class="form-control" id="horizontal-email-input" accept="image/*" required>
                                <img src="{{asset($setting->logo)}}" alt="" height="150" width="150">
                            </div>
                        </div> --}}
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Logo</label>
                            <div class="col-sm-9">
                                <input type="file" name="logo" class="form-control-file" id="horizontal-password-input"/>
                                <img src="{{asset($setting->logo)}}" alt="" height="150" width="200"/>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Mobile</label>
                            <div class="col-sm-9">
                                <input type="text" name="mobile" value="{{$setting->mobile}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Bkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="bkas" value="{{$setting->bkas}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Pixel</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixel" value="{{$setting->pixel}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Pixel 2</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixeltwo" value="{{$setting->pixeltwo}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Pixel 3</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixelthree" value="{{$setting->pixelthree}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Pixel 4</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixelfour" value="{{$setting->pixelfour}}" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Title bar</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" value="{{$setting->title}}" class="form-control" id="horizontal-firstname-input"/>
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