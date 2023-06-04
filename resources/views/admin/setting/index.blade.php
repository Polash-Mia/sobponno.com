@extends('admin.master')

@section('title')
    Add Setting
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Setting Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('setting.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> logo</label>
                            <div class="col-sm-9">
                                <input type="file" name="logo" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Mobile</label>
                            <div class="col-sm-9">
                                <input type="text" name="mobile" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Bkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="bkas" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Facebook Pixel</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixel" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Facebook Pixel 2</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixeltwo" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Facebook Pixel 3</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixelthree" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> Facebook Pixel 4</label>
                            <div class="col-sm-9">
                                <input type="text" name="pixelfour" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="title" class="col-sm-3 col-form-label"> Title Bar</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="title"/>
                            </div>
                        </div>
                                          
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New Setting</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
