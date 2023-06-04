@extends('admin.master')
@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Default Datatable</h4>
                

                {{-- <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> --}}
                <table id="datatable" class="table table-bordered  " >
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Inside Of Dhaka</th>
                        <th>Outside Of Dhaka</th>
                        
                       
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>

                        @foreach ($shippings as $shipping)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $shipping->inside_dhaka}}</td>                           
                            <td>{{ $shipping->outside_dhaka  }}</td>
                            
                            
                            <td>

                                
                                <a href="{{ route('shipping.edit',['id'=>$shipping->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('shipping.delete',['id'=>$shipping->id]) }}" class="btn btn-danger   btn-sm"
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