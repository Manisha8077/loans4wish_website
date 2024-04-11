@extends('layouts.app')

@section('content')
 <div class="container-fluid">

                    <!-- Page Heading -->
                  <!--   <h1 class="h3 mb-2 text-gray-800">Pages</h1> -->
                 @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pages List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>View</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                   
                                   
                                    <tbody>
                                          @foreach($Pages as $row)
                                        <tr>
                                            <td>{{$row->loans_type}}</td>
                                            <td>{{$row->title}}</td>
                                            <td>{!! Str::limit(strip_tags($row->content),400) !!}</td>
                                            <td> 
                                            <a href="{{Route('create-page',$row->id)}}"><i class="fa fa-edit"></i></a>
                                            <a href="{{Route('view-page',$row->id)}}"><i class="fa fa-eye"></i></a>
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
