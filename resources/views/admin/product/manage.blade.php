@extends('admin.master')
@section('title')
manage-product
@endsection
@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Default Datatable</h4>
                

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                {{-- <table id="datatable" class="table table-bordered  " > --}}
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Category Name</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        {{-- <th>description</th> --}}
                        <th>Stock Product </th>
                        <th>Purchase Price</th>
                        <th>Regular Price</th>
                        <th>Discount Price</th>
                        <th>Discount Persent</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>

                        @foreach ($products as $product)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{$product->category->name ?? ''}}</td>                           
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" height="50" width="50">
                            </td>
                            {{-- <td>{!!$product->description!!}</td> --}}
                            <td>{{$product->stock_amount}}</td>
                            <td>{{$product->purchaseprice}}</td>
                            <td>{{$product->regular_price}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->parcent}}%</td>
                            <td>

                                <a href="{{route('product.details', ['id' => $product->id])}}" class="btn btn-primary btn-sm" title="View Product Detail">
                                    <i class="fa fa-book-open"></i>
                                </a>
                                <a href="{{ route('product.edit',['id'=>$product->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('product.delete',['id'=>$product->id]) }}" class="btn btn-danger   btn-sm"
                                   >
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr> 
                            
                        @endforeach
                                                                                                                                                  
                
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->



@endsection