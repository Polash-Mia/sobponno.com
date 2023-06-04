@extends('admin.master')
@section('title')
manage-setting
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
                        <th>Slide Image</th>
                                   
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>

                       
                        @foreach ($slides as $slide)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            
                            <td>
                                <img src="{{ asset($slide->image) }}" alt="" height="50" width="50">
                            </td>                  
                            
                            <td>
                               
                                <a href="{{ route('slide.delete',['id'=>$slide->id]) }}" class="btn btn-danger   btn-sm"
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