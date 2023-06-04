@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
            
                    <h4 class="card-title mb-4">Edit Peoduct</h4>
        
                    <form action="{{route('product.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id" required >
                                    <option value="" disabled selected> -- Select Category Name -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}> {{$category->name}} </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" value="{{$product->name}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Stock Amount</label>
                            <div class="col-sm-9">
                                <input type="number" name="stock_amount" value="{{$product->stock_amount}}" class="form-control" id="horizontal-firstname-input"/>
                                <span class="text-danger">{{$errors->has('stock_amount') ? $errors->first('stock_amount') : ''}}</span>
                            </div>
                        </div>
                        
        
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Purchase Price </label>
                            <div class="col-sm-9">
                              <input type="text" name="purchaseprice" value="{{$product->purchaseprice}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Regular Price </label>
                            <div class="col-sm-9">
                              <input type="text" name="regular_price" value="{{$product->regular_price}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Discount Price </label>
                            <div class="col-sm-9">
                              <input type="text" name="selling_price" value="{{$product->selling_price}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Discount percent</label>
                            <div class="col-sm-9">
                              <input type="number" name="parcent" value="{{$product->parcent}}" class="form-control" />
                            </div>
                        </div>
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="long_description" id="horizontal-email-input">{{$product->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Product Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" id="horizontal-email-input">
                                <img src="{{asset($product->image)}}" alt="" height="150" width="150">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3">Product Sub Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="sub_image[]" class="form-control-file" id="horizontal-password-input" accept="image/*" multiple/>
                                @foreach($product->subImages as $subImage)
                                    <img src="{{asset($subImage->image)}}" alt="" height="80" width="100"/>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="" class="col-sm-3">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="mr-3"> <input type="radio" {{$product->status == 1 ? 'checked' : ''}} name="status" value="1" /> Published </label>
                                <label> <input type="radio" name="status" {{$product->status == 0 ? 'checked' : ''}} value="0"/> Unpublished </label>
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