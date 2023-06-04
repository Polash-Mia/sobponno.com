@extends('website.master')
@section('body')
<section class="mt-3 category">
    <div class="container">
      <div class="row">
        <div class="col-md-3 bg-white category-list" id="category-mobile">
          <ul class="list-group">
            <li class="list-group-item active text-center fw-bold" aria-current="true">TOP CATEGORIES</li>
            @foreach ($categories as $category)
                
           
            <li class="list-group-item"><i class="fa-solid fa-table-cells-large"></i><a href="{{route('category', ['id' => $category->id])}}">{{$category->name}}</a></li>
            
            @endforeach
           
          </ul>
        </div>
        <div class="col-md-9 slider">

          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

              @foreach ($slides as $key => $slide)
              <div class="carousel-item {{ $key == 0 ? 'active' : ' ' }}" >
                <img src="{{asset($slide->image)}}" class="d-block w-100" alt="Slide Image">
              </div>
              @endforeach
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
      </div>
    </div>
  </section>
  {{-- <section class="category-product-mobile my-2">
    <div class="container bg-site-color rounded text-white text-center py-2 ">
      <div class="row">
        <div class="col ">
          <h4 class="fw-bold">প্রোডাক্ট ক্যাটেগরীজ</h4>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        @foreach ($categories as $category)
        <div class="col-3 p-3">
          <a href="{{route('category', ['id' => $category->id])}}" class="btn btn-success  text-white">{{ $category->name }}</a>
        </div>
        @endforeach

      </div>
    </div>
  </section> --}}
  <!--<section class="py-4 web-product-category ">-->
  <!--  <div class="container  rounded-0 text-white text-center  ">-->
  <!--    <div class="row">-->
  <!--      <div class="col-md-12 ">-->
  <!--        <h4 class="fw-bold align-items-center py-2 bg-site-color">প্রোডাক্ট ক্যাটেগরীজ</h4>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      @foreach ($categories as $category)-->
  <!--      <div class="col mt-3">-->
  <!--        <div class="card h-100 rounded-0 border-site-color">-->
  <!--          <a href="{{route('category', ['id' => $category->id])}}">-->
  <!--              <img src="{{ asset($category->image) }}" class="img-fluid" alt="">-->
  <!--          </a>-->
            
  <!--          <div class="card-body px-1">-->
  <!--            <a href="{{route('category', ['id' => $category->id])}}" class="btn btn-success btn-sm w-100 px-1 cat-font">{{ $category->name }}</a>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--      @endforeach-->
       
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  @if ($products->count() == 0)
  <h1 class="text-center text-danger py-5">দুঃখিত কোন পণ্য পাওয়া যায়নি  </h1>
  <a href="{{ route('home') }}" class="btn btn-success rounded">HOME</a>


  @else
  <section class=" product mt-3">
    <div class="container  text-white text-center product-header rounded-0">
      <div class="row">
        <div class="col">
          <h4 class="fw-bold align-items-center py-2 bg-site-color">নতুন পণ্য</h4>
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
              <p>- {{$product->parcent}}% </p>
            </div>
            {{-- <div class="card-body text-center ">
             <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}" class="text-truncate w-75 me-3 text-decoration-none fw-bold text-dark">
              {{$product->name}}
             </a>
             <div class="text-danger py-2 price">
              <del>{{$product->regular_price}} টাকা</del>
              <b>{{$product->selling_price}} টাকা</b>
             </div>
            </div> --}}
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
        <div class=" container px-5 ">
          <span class="px-5 mx-5">{{$products->links()}}</span>
      </div>
      </div>
    </div>
    
  </section>


@endsection