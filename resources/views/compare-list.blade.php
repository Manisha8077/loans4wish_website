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
                            <a href="{{route('create-compare')}}"><h6 class="m-0 font-weight-bold text-primary">Add Compare</h6></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Bank Name</th>
                                            <th>Loans Type</th>
                                             <th>Interest Rate</th>
                                            <th>Loan Amount</th>
                                            <th>Tenure</th>
                                             <th>Monthly Income</th>
                                              <th>Processing Fee</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                   
                                   
                                    <tbody>
                                          @foreach($Compare as $row)
                                        <tr>
                                            <td>{{$row->bank_name}}</td>
                                            <td>{{$row->loans_type}}</td>
                                           
                                            <td>{{$row->interest_rate}}</td>
                                           <td>{{$row->loan_amount}}</td>
                                         <td>{{$row->tenure}}</td>
                                           <td>{{$row->monthly_income}}</td>
                                           <td>{{$row->processing_fee}}</td>
                                           
                                            <td> 
                                              <a href="{{Route('delete-compare',$row->id)}}"><i class="fa fa-trash"></i></a>
                                              <a href="{{Route('edit-compare',$row->id)}}"><i class="fa fa-edit"></i></a>
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
