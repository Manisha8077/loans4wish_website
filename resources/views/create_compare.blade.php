@extends('layouts.app')

@section('content')
 <div class="container-fluid">

  <form action="{{route('insert-compare')}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('POST')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Bank Name</label>
     <select class="form-control " name="bank_name" required="">
         
         <option value="Sundaram Home Finance Limited">Sundaram Home Finance Limited</option>
         <option value="DBS Home">DBS Home</option>
         <option value="LIC Housing Finance Ltd.">LIC Housing Finance Ltd.</option>
         <option value="Indiabulls ">Indiabulls</option>
         
          <option value="Incred">Incred</option> 
         <option value="Paysense">Paysense</option> 
         <option value="Finnable">Finnable</option> 
         <option value="Upward">Upward</option> 
         <option value="Finzy">Finzy</option> 
         <option value="Ashv Finance">Ashv Finance</option> 
         <option value="AU Small Finance">AU Small Finance</option> 
         
         <option value="Home Credit">Home Credit</option> 
         <option value="Ujjivan Small Finance Bank">Ujjivan Small Finance Bank</option> 
         <option value="IIFL">IIFL</option> 
         
         
                	<option value="Aditya Birla">Aditya Birla</option>   
<option value="Allahabad Bank">Allahabad Bank</option>
<option value="Andhra Ban">Andhra Bank</option>
<option value="Axis Bank">Axis Bank</option>
<option value="Bajaj Finserv">Bajaj Finserv</option>
<option value="Bandhan Bank">Bandhan Bank</option>
<option value="Bank of Baroda">Bank of Baroda</option>
<option value="Bank of India">Bank of India</option>
<option value="Bank of Maharastra">Bank of Maharastra</option>
<option value="Canara Bank">Canara Bank</option>
<option value="Central Bank of India">Central Bank of India</option>
<option value="Citibank">Citibank</option>
<option value="Corporation Bank">Corporation Bank</option>
<option value="Dena Bank">Dena Bank</option>
<option value="DCB Bank">DCB Bank</option>
<option value="Federal Bank">Federal Bank</option>
<option value="Fullerton India">Fullerton India</option>
<option value="HDFC Bank">HDFC Bank</option>
<option value="HSBC Bank">HSBC Bank</option>
<option value="ICICI Bank">ICICI Bank</option>
<option value="IDBI">IDBI</option>
<option value="IndusInd Bank">IndusInd Bank</option>
<option value="IDFC Bank">IDFC Bank</option>
<option value="Jammu and Kashmir Bank">Jammu and Kashmir Bank</option>
<option value="Karnataka Bank">Karnataka Bank</option>
<option value="Karur Vysya Bank">Karur Vysya Bank</option>
<option value="Kotak Bank">Kotak Bank</option>
<option value="Lakshmi Vilas Bank">Lakshmi Vilas Bank</option>
<option value="Nainital Bank">Nainital Bank</option>
<option value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
<option value="Punjab and Sind Bank">Punjab and Sind Bank</option>
<option value="Punjab National Bank">Punjab National Bank</option>
<option value="RBL">RBL</option>
<option value="Standard Chartered Bank">Standard Chartered Bank</option>
<option value="State Bank of India/SB">State Bank of India/SBI</option>
<option value="Syndicate Bank">Syndicate Bank</option>
<option value="Tata Capital">Tata Capital</option>
<option value="UCO Bank">UCO Bank</option>
<option value="United Bank of India">United Bank of India</option>
<option value="Vijaya Bank">Vijaya Bank</option>
<option value="Yes Bank">Yes Bank</option></select>
    </div>
    
  </div>
  
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Loan Type</label>
     <select class="form-control " name="loans_type" required="">
                	<option value="personal-loan">Personal Loan</option>   
<option value="business-loan">Business Loan</option>
<option value="home-loan">Home Loan</option>
<option value="car-loan">Car Loan</option>
<option value="loan-against-property">Loan Against Property</option>
</select>
    </div>
    
  </div>
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Name of Bank</label>
      <input type="text" class="form-control"  placeholder="" name="name_of_bank" required="" value="">
    </div>
    
  </div>     
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Interest Rate</label>
      <input type="text" class="form-control"  placeholder="" min="0" name="interest_rate" required="" value="">
    </div>
    
  </div> 
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Interest Rate show</label>
      <input type="text" class="form-control"  placeholder=""  name="interest_rate_text" required="" value="">
    </div>
    
  </div>     
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Loan Amount</label>
      <input type="text" class="form-control"  placeholder="" name="loan_amount" required="" value="">
    </div>
            </div> 
            <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Loan Amount show</label>
      <input type="text" class="form-control"  placeholder="" name="loan_amount_show" required="" value="">
    </div>
    
  </div> 
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Tenure</label>
      <input type="text" class="form-control"  placeholder="" name="tenure" required="" value="">
    </div>
    
  </div> 
        
         <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Monthly Income</label>
      <input type="text" class="form-control"  placeholder="" name="monthly_income" required="" value="">
    </div>
    
  </div> 
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Processing fee</label>
      <input type="text" class="form-control"  placeholder="" name="processing_fee"  value="">
    </div>
    
  </div> 
        
        
    
 
 
 
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
                   

                </div>
              
                
  
    
@endsection
