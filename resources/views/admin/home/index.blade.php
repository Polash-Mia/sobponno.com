@extends('admin.master')

@section('title')
    Home Page
@endsection

@section('body')

<div class="row">
    <div class="col-md-3 mb-3 " style="height: 150px;">
        <a href="{{route('admin-order.manage')}}">
        
        <div class="card-body bg-info py-5 h-100 rounded">
            
            <h3 class="text-white text-center ">{{$todayOrder}}</h3>
            <p class="text-white text-center pb-2">Today Order </p>
        </div>
        </a>
        
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <a href="{{route('admin-order.manage')}}">
        <div class="card-body bg-warning py-5 h-100 rounded">
            
            <h3 class="text-white text-center">{{$todayDelivared}}</h3>
            <p class="text-white text-center pb-2">Today Delivered</p>
        </div>
        </a>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <a href="{{route('admin-order.manage')}}">
        <div class="card-body bg-danger py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$todayPayment}}</h3>
            <p class="text-white text-center pb-2">Today Payment Receive</p>
        </div>
        </a>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <a href="{{route('admin-order.manage')}}">
        <div class="card-body bg-success py-5 h-100 rounded">
            
            <h3 class="text-white text-center">{{$todayOrder}}</h3>
            <p class="text-white text-center pb-2">Today Vesitors</p>
        </div>
        </a>
    </div>
</div>


<div class="row">
    <div class="col-md-3 mb-3 " style="height: 150px;">
        <a href="{{route('product.manage')}}">
        <div class="card-body bg-success py-5 h-100 rounded">
            
            <h3 class="text-white text-center ">{{$totalProduct}}</h3>
            <p class="text-white text-center pb-2">Total Product  </p>
        </div>
        </a>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <a href="{{route('admin-order.manage')}}">
        <div class="card-body bg-danger py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalOrder}}</h3>
            <p class="text-white text-center pb-2">Total Order</p>
        </div>
        </a>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        {{-- <a href="{{route('customer.list')}}"> --}}
        <div class="card-body bg-info py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalCustomer}}</h3>
            <p class="text-white text-center pb-2">Total Customer </p>
        </div>
        </a>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <div class="card-body bg-warning py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalCustomer}}</h3>
            <p class="text-white text-center pb-2">Total Customer feedback </p>
        </div>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <div class="card-body bg-warning py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalComplate}}</h3>
            <p class="text-white text-center pb-2">Total Complate  </p>
        </div>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <div class="card-body bg-info py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalCancel}}</h3>
            <p class="text-white text-center pb-2">Total Cancel  </p>
        </div>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <div class="card-body bg-success py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalProcessing}}</h3>
            <p class="text-white text-center pb-2">Total Processing  </p>
        </div>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <div class="card-body bg-danger py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalPendingPayment}}</h3>
            <p class="text-white text-center pb-2">Total Pending Payment  </p>
        </div>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <div class="card-body bg-success py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalPendingDelivery}}</h3>
            <p class="text-white text-center pb-2">Total Pending Delivery  </p>
        </div>
    </div>
    <div class="col-md-3 mb-3" style="height: 150px;">
        <div class="card-body bg-danger py-5 h-100 rounded">
           
            <h3 class="text-white text-center">{{$totalRenevue}}</h3>
            <p class="text-white text-center pb-2">Total Renevue  </p>
        </div>
    </div>
</div>



{{-- <div class="row">
   

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Column charts</h4>

                <div id="column-charts" dir="ltr"></div>

            </div>
        </div>
    </div> <!-- end col -->

</div> --}}
@endsection
