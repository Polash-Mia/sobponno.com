@extends('website.master')
@section('body')

<section class="detail">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 mt-3 border-1 border-site-color ">
                {{-- <img src="{{ asset('/') }}website/assets/img/2-550x550.jpg" class="img-fluid" alt=""> --}}
                <div class="col-6 col-md-12 col-12">
                    @if (count($product->subImages) > 0)
                        <div class="xzoom-container w-100">
                            <img class="xzoom w-100" id="xzoom-default" src="{{ asset($product->subImages[0]->image) }}"
                                xoriginal="{{ asset($product->subImages[0]->image) }}" />
                            <div class="xzoom-thumbs pt-3">
                                @foreach ($product->subImages as $key => $subImage)
                                    <a href="{{ asset($subImage->image) }}">
                                        <img class="xzoom-gallery" width="80" src="{{ asset($subImage->image) }}"
                                            @if ($key == 0) xpreview="{{ asset($subImage->image) }}" @endif
                                            title="The description goes here"></a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="xzoom-container">
                            <img class="xzoom " id="xzoom-default" src="{{ asset($product->image) }}"
                                xoriginal="{{ asset($product->image) }}" />
                            <div class="xzoom-thumbs">
                                <a href="{{ asset($product->image) }}">
                                    <img class="xzoom-gallery" src="{{ asset($product->image) }}"
                                        xpreview="{{ asset($product->image) }}" title="The description goes here"
                                        class="rounded w-100" style="height: 200px; width:100%;">
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6 mt-3 ">
                <div class="row mx-3">
                    <div class="col-12  shadow p-3">
                        <h4>{{$product->name}}</h4>
                        <div class="text-danger py-2">
                            <del>{{$product->regular_price}} টাকা</del>
                            <b>{{$product->selling_price}} টাকা</b>
                        </div>


                        <form action="{{ route('add-to-cart', ['id' => $product->id]) }}" method="POST">
                            @csrf
                        <div class=" d-flex align-items-center mb-4 pt-2">
                            পরিমান :
                                {{-- <div class="input-group quantity mr-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-minus"  id="qty_minus">
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="qty" min="1" name="quantity" class="form-control  text-center" value="1">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn  btn-plus" id="qty_plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>             --}}
                                <div class="input-group quantity mr-3" style="width: 130px;">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-minus" id="qty_minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="qty" min="1" name="quantity"
                                        class="form-control  text-center" value="1">
                                    {{-- <input type="number" name="quantity" class="form-control bg-secondary text-center" value="1" min="1"> --}}
                                    <div class="input-group-btn">
                                        <button type="button" class="btn  btn-plus" id="qty_plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                         </div>
                         <button type="submit" class="order-korun fw-bold border-0 py-2">অর্ডার করুণ</button>
                        </form>
                         <hr>
                    </div>
                    <div class="col-12 shadow p-3 mt-3">
                        <div class="fw-bold fs-6"><span class="text-danger">প্রিয় ক্রেতা,</span> অর্ডার করার আগে প্রোডাক্টি সম্পর্কে জানতে বিবরণ পড়ে নিন। <span class="text-danger">বিশেষ অনুরোধ</span> যদি প্রয়োজন হয় তবেই শুধু অর্ডার করবেন, অন্যথায় আপনার ও আমাদের মূল্যবান সময় নষ্ট করবেন না। <span class="text-danger">ধন্যবাদ</span>
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('/') }}website/assets/img/call.gif" alt="" height="60" width="100">
                            @foreach ($settings as $setting)
                            <a href="tel:+88{{$setting->mobile}}" class="fs-1 fw-bold text-decoration-none text-orange">{{$setting->mobile}}</a>
                            @endforeach
                        </div>
                        @foreach ($shippings as $shipping)
                        <div class="d-flex justify-content-between py-2 text-info fw-bold">
                            <div>ঢাকায় ডেলিভারি খরচ</div>
                            <div>	৳ {{ $shipping->inside_dhaka}}</div>
                        </div>
                        <div class="d-flex justify-content-between py-2 text-info fw-bold">
                            <div>ঢাকার বাহিরে ডেলিভারি খরচ</div>
                            <div>	৳ {{ $shipping->outside_dhaka }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3 my-5  border-site-color">
            <div class="col-12  ">
                <div class="text-center py-2 mb-3 bg-site-color rounded-2 text-white">
                    <h2>DESCRIPTION</h2>
                </div>
                {!!$product->long_description!!}
            </div>
        </div>

    </div>
  </section>
  <section class="py-4 product">
    {{-- <div class="container product-header rounded">
      <div class="row">
        <div class="col">
          <h4>রিলেটেড  পণ্য</h4>
        </div>
      </div>
    </div> --}}
    <div class="container">
        <div class="row ">
          <div class="col-md-12  rounded-0 text-white text-center">
            <h4 class="fw-bold align-items-center py-2 bg-site-color">রিলেটেড  পণ্য</h4>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row">
        @foreach($related_products as $product)
        <div class="col-md-2 col-6 mt-3">
          <div class="card h-100 rounded-0 border-site-color">
            <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}" class="zoom-img">
              <img src="{{asset($product->image)}}" class="img-fluid position-relative " alt="">
             </a>
            <img src="{{ asset('/') }}website/assets/img/discount.jpg" class="discount" alt="">
            <div class="box">
              <h6>- {{$product->parcent}}% </h6>
            </div>
            {{-- <div class="card-body text-center">
             <a href="{{route('product.detail',['id'=>$product->id,'slug'=> Str::slug($product->name)])}}" class="text-truncate text-decoration-none fw-bold text-dark">
              {{$product->name}}
             </a>
             <div class="text-danger price py-2">
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
      
        {{-- <div class=" container px-5 ">
          <span class="px-5 mx-5">{{$products->links()}}</span>
      </div> --}}
      </div>
    </div>
    
  </section>



@endsection


