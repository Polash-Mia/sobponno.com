@extends('admin.master')
@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Couriers Datatable</h4>
                

                {{-- <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> --}}
                <table id="datatable" class="table table-bordered  " >
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Couriers Name</th>
                        <th> City</th>
                        <th> Zone</th>
                        <th> Charge</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>

                        @foreach ($couriers as $courier)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $courier->name}}</td>                           
                            <td>{{ $courier->city  }}</td>
                            <td>{{ $courier->zone  }}</td>
                            <td>{{ $courier->charge  }}</td>
                            
                            
                            <td>

                                
                                <a href="{{ route('couriers.edit',['id'=>$courier->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('couriers.delete',['id'=>$courier->id]) }}" class="btn btn-danger   btn-sm"
                                    onclick="return confirm('Are You Sure to Delete this.')">
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