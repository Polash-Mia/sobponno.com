@extends('website.master')
@section('body')
<div class="container-fluid pt-2">
    

  <img src="" alt="" >
    <!-- Products End -->
    <div class="text-center mb-4">


        @if ($products->count() == 0)
                <h1 class="text-center text-danger py-5">দুঃখিত কোন পণ্য পাওয়া যায়নি  </h1>
                <a href="{{ route('home') }}" class="btn btn-success rounded">HOME</a>
    

                @else
                <div class="container  rounded text-white text-center py-2 ">
                    <div class="row">
                      <div class="col ">
                        <h4 class="fw-bold bg-site-color py-2">নতুন পণ্য</h4>
                      </div>
                    </div>
                  </div>
    </div>
    <div class="row px-xl-5 pb-3">

        @foreach($products as $product)
        
       {{-- <div class=" col-md-2 col-6 border-light border-1 ">
            <div class="card  border-1 ">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}">
                        <img class="img-fluid w-100" src="{{asset($product->image)}}" alt="" style="height: 210px; width:205px;">
                    </a>
                    
                </div>
                <div class="card-body border-left border-right text-center p-0 ">
                    
                    
                        <h6 class="text-muted ml-2"><del>৳{{$product->regular_price}}</del></h6>
                        <h6 class="text-warning">৳{{$product->selling_price}}</h6>
                        <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}">
                            <h6 class="text-truncate mb-3 px-3">{{$product->name}}</h6>
                        </a>
                        
                            <form action="{{route('add-to-cart', ['id' => $product->id ])}}" method="POST">  
                                @csrf    
                                
                                <input type="hidden" name="quantity"  value="1" >
                                <div class="pb-3">
                                    <button type="submit" class="btn btn-sm w-100 mb-2 bg-danger px-2 text-white rounded" name="order_now" >অর্ডার করুন</button> 
                                </div>
                                
                                
                            </form>
                    
                </div>
                
            </div>
        </div> --}}

        <div class="col-md-2 col-6 mt-3">
            <div class="card h-100 rounded-0 border-site-color">
              <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}" class="zoom-img">
                <img src="{{asset($product->image)}}" class="img-fluid position-relative " alt="">
               </a>
              <img src="{{ asset('/') }}website/assets/img/discount.jpg" class="discount" alt="">
              <div class="box">
                <h6>- {{$product->parcent}}% </h6>
              </div>
              <div class="card-body text-center text-truncate">
               <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}" class=" text-decoration-none fw-bold text-dark">
                {{$product->name}}
               </a>
               <div class="text-danger py-2 price">
                <del>{{$product->regular_price}} টাকা</del>
                <b>{{$product->selling_price}} টাকা</b>
               </div>
              </div>
              <form action="{{route('add-to-cart', ['id' => $product->id ])}}" method="POST">  
                  @csrf 
                  <input type="hidden" name="quantity"  value="1" >
              <button type="submit" class="w-100 border-0 card-footer text-center bg-site-color rounded-0 text-white fw-bold text-decoration-none">অর্ডার করুণ</button>
                  
              </form>
          </div>
          </div>
        @endforeach
        @endif
    </div>

    <span>{{$products->links()}}</span>
</div>

{{-- <style>
    .w-5{
        height: 45px;
        width: 45px;
    }
</style> --}}
@endsection