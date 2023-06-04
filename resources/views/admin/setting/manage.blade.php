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
                

                {{-- <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> --}}
                <table id="datatable" class="table table-bordered  " >
                    <thead>
                    <tr>
                        <th>SL No.</th>                     
                        <th>Logo</th>
                        <th>mobile</th>            
                        <th>Bkas</th>            
                        <th>Pixel</th>            
                        <th>Pixel 2</th>            
                        <th>Pixel 3</th>            
                        <th>Pixel 4</th>            
                        <th>Title bar</th>            
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>

                       
                        @foreach ($settings as $setting)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            
                            <td>
                                <img src="{{ asset($setting->logo) }}" alt="" height="50" width="50">
                            </td>                  
                            <td>{{$setting->mobile}}</td>
                            <td>{{$setting->bkas}}</td>
                            <td>{{$setting->pixel}}</td>
                            <td>{{$setting->pixeltwo}}</td>
                            <td>{{$setting->pixelthree}}</td>
                            <td>{{$setting->pixelfour}}</td>
                            <td>{{$setting->title}}</td>
                            
                            <td>
                                <a href="{{ route('setting.edit',['id'=>$setting->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('setting.delete',['id'=>$setting->id]) }}" class="btn btn-danger   btn-sm"
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