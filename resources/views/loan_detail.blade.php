@extends('layouts.app')

@section('content')
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Details </h6>
                        </div>
                      <h6>desired_loan_amount</h6> 
<?php echo $Loans->desired_loan_amount;?><br/>
<?php echo $Loans->tenure;?><br/>
 <?php echo $Loans->employment_status;?><br/>
 <?php echo $Loans->monthly_income;?><br/>
 <?php echo $Loans->city;?><br/>
 <?php echo $Loans->first_name;?><br/>
<?php echo $Loans->last_name;?><br/>
 <?php echo $Loans->mobile_number;?><br/>
<?php echo $Loans->email;?><br/>
<?php echo $Loans->residential_status;?><br/>
<?php echo $Loans->current_business_stability;?><br/>
<?php echo $Loans->audited;?><br/>
<?php echo $Loans->office_status;?><br/>
 <?php echo $Loans->company_name;?><br/>
 <?php echo $Loans->any_loan_running;?><br/>
<?php echo $Loans->primary_bank_account;?><br/>
 <?php echo $Loans->loans_type;?><br/>
<?php echo $Loans->business_registration_proof;?><br/>
<?php echo $Loans->how_old_business;?><br/>
<?php echo $Loans->monthly_revenue;?><br/>
<?php echo $Loans->dob;?><br/>
<?php echo $Loans->car_type;?><br/>
<?php echo $Loans->car_booked;?><br/>
<?php echo $Loans->delivery_date;?><br/>
<?php echo $Loans->annual_income;?><br/>
<?php echo $Loans->credit_card;?><br/>
<?php echo $Loans->sub_occupation;?><br/>
<?php echo $Loans->full_name;?><br/>
<?php echo $Loans->pincode;?><br/>
<?php echo $Loans->deposit_amount;?><br/>
<?php echo $Loans->gender;?><br/>

                                  
                              
                          
                    </div>

                </div>
                <!-- /.container-fluid -->
                
  
    
@endsection
