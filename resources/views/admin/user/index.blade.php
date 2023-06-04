@extends('admin.master')

@section('title')
    Add User
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add User Form</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <form action="{{route('user.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="horizontal-firstname-input"/>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">User Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="horizontal-password-input"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Password </label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="horizontal-password-input"/>
                            </div>
                        </div>
                        {{-- <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Role </label>
                            <div class="col-sm-9">
                                <select name="role" id="" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create New User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection