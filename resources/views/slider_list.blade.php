@extends('layouts.app')

@section('content')
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Slider List</h1> -->
                 @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('create-slider')}}"><h6 class="m-0 font-weight-bold text-primary">Add Slider</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                             <th>Image</th>
                                            <!-- <th>Apply Now (URL)</th>
                                            <th>Contact Us(URL)</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                   
                                   
                                    <tbody>
                                          @foreach($Slider as $row)
                                        <tr>
                                            <td>{{$row->title1}}</td>
                                            <td>{{$row->title2}}</td>
                                            <td>{!!$row->image!!}</td>
                                           <!-- <td>{{$row->url_1}}</td>
                                         <td>{{$row->url_2}}</td> -->
                                            <td> <a href="{{Route('delete-slider',$row->id)}}"><i class="fa fa-trash"></i></a>
                                                <a href="{{Route('edit-slider',$row->id)}}"><i class="fa fa-edit"></i></a>
                                                 <a href="{{Route('view-slider',$row->id)}}"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                         @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                
  
    
@endsection
