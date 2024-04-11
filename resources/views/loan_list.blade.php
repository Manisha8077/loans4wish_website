@extends('layouts.app')

@section('content')
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Loan Enquiry Records</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Loans Type</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>Loan Amount</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tfoot>
                                        <tr>
                                            <th>Loans Type</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>Loan Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                   
                                    <tbody>
                                          @foreach($Loans as $row)
                                        <tr>
                                            <td>{{$row->loans_type}}</td>
                                            <td>{{$row->first_name}} {{$row->last_name}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->mobile_number}}</td>
                                            <td>{{$row->desired_loan_amount}}</td>
                                             <td><a href="{{Route('detail-loan',$row->id)}}">View</a></td>
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
