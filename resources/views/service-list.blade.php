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
                            <a href="{{route('create-service')}}"><h6 class="m-0 font-weight-bold text-primary">Add Service</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>content</th>
                                             <th>Image</th>
                                            <!-- <th>Apply url</th>
                                            <th>Compare url</th>
                                             <th>EMI url</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                   
                                   
                                    <tbody>
                                          @foreach($Service as $row)
                                        <tr>
                                            <td>{{$row->title}}</td>
                                            <td>{{$row->content}}</td>
                                            <td><img src="{{asset('assets/images/web_img/'.$row->image)}}"  width="100" height="80" style="border: 2px solid #555;"> </td>
                                           <!-- <td>{{$row->apply_url}}</td>
                                         <td>{{$row->compare_url}}</td>
                                           <td>{{$row->emi_url}}</td> -->
                                            <td> <a href="{{Route('delete-service',$row->id)}}"><i class="fa fa-trash"></i></a>
                                                <a href="{{Route('edit-service',$row->id)}}"><i class="fa fa-edit"></i></a> 
                                                <a href="{{Route('view-service',$row->id)}}"><i class="fa fa-eye"></i></a>
                                                
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
