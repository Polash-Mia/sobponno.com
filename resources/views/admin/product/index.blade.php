@extends('admin.master')



@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    
                    <h4 class="card-title mb-4">Add Product</h4>
        
                    <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" required >
                                    <option value="" disabled selected> -- Select Category Name -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"> {{$category->name}} </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        
        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Stock unit</label>
                            <div class="col-sm-9">
                                <input type="number" name="stock_amount" class="form-control" id="horizontal-firstname-input"/>
                                <span class="text-danger">{{$errors->has('stock_amount') ? $errors->first('stock_amount') : ''}}</span>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Purchase Price</label>
                            <div class="col-sm-9">
                              <input type="number" name="purchaseprice" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Regular Price</label>
                            <div class="col-sm-9">
                              <input type="number" name="regular_price" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Discount Price</label>
                            <div class="col-sm-9">
                              <input type="number" name="selling_price" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Discount percent</label>
                            <div class="col-sm-9">
                              <input type="number" name="parcent" class="form-control" />
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Product Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="long_description" id="horizontal-email-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Product Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Product Sub Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="sub_image[]" class="form-control-file" id="horizontal-password-input" accept="image/*" multiple/>
                            </div>
                        </div>  
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="mr-3"> <input type="radio" name="status" value="1" checked/> Published </label>
                                <label> <input type="radio" name="status" value="0"/> Unpublished </label>
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