@extends('website.master')

@section('body')

<section class="py-4">
    {{-- <div class="container bg-site-color rounded text-white text-center py-2 ">
        <div class="row">
          <div class="col ">
            <h4 class="fw-bold">{{ $category->name }}</h4>
          </div>
        </div>
      </div> --}}
      <div class="container  text-white text-center product-header rounded-0">
        <div class="row">
          <div class="col">
            <h4 class="fw-bold align-items-center py-2 bg-site-color">{{ $category->name }}</h4>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          @foreach($products as $product)
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
          
          <div class=" container px-5 ">
            <span class="px-5 mx-5">{{$products->links()}}</span>
        </div>
        </div>
      </div>
</section>


@endsection