@extends('website.master')
@section('body')
<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 py-4">
                <div class="card card-body text-center ">
                    <h1 class="text-success" >{{Session::get('message')}}</h1>
                    
                </div>
                {{-- <a href="{{route('admin-order.view-invoice', ['id' => $order->id])}}" class="btn btn-success text-white ms-auto ">Invoice</a> --}}
            </div>
        </div>
    </div>
</section>
@endsection