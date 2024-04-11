@extends('layouts.app')

@section('content')
 <div class="container-fluid">

  <form action="{{route('update-compare',$Compare->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Bank Name</label>
     <select class="form-control " name="bank_name" required="">
         
         <option value="Sundaram Home Finance Limited"  @if ($Compare->bank_name == "Sundaram Home Finance Limited") {{ 'selected' }} @endif>Sundaram Home Finance Limited</option>
         <option value="DBS Home"  @if ($Compare->bank_name == "DBS Home") {{ 'selected' }} @endif>DBS Home</option>
         <option value="LIC Housing Finance Ltd."  @if ($Compare->bank_name == "LIC Housing Finance Ltd.") {{ 'selected' }} @endif>LIC Housing Finance Ltd.</option>
         <option value="Indiabulls"  @if ($Compare->bank_name == "Indiabulls") {{ 'selected' }} @endif>Indiabulls</option>
         
         
          <option value="Paysense" @if ($Compare->bank_name == "Incred") {{ 'selected' }} @endif>Incred</option> 
         <option value="Paysense" @if ($Compare->bank_name == "Paysense") {{ 'selected' }} @endif>Paysense</option> 
         <option value="Finnable" @if ($Compare->bank_name == "Finnable") {{ 'selected' }} @endif>Finnable</option> 
         <option value="Upward" @if ($Compare->bank_name == "Upward") {{ 'selected' }} @endif>Upward</option> 
         <option value="Finzy" @if ($Compare->bank_name == "Finzy") {{ 'selected' }} @endif>Finzy</option> 
         <option value="Ashv Finance" @if ($Compare->bank_name == "Ashv Finance") {{ 'selected' }} @endif>Ashv Finance</option> 
         <option value="AU Small Finance Bank" @if ($Compare->bank_name == "Aditya Birla") {{ 'selected' }} @endif>AU Small Finance</option> 
         
         <option value="Home Credit" @if ($Compare->bank_name == "Home Credit") {{ 'selected' }} @endif>Home Credit</option> 
         <option value="Ujjivan Small Finance Bank" @if ($Compare->bank_name == "Ujjivan Small Finance Bank") {{ 'selected' }} @endif>Ujjivan Small</option> 
         <option value="IIFL" @if ($Compare->bank_name == "IIFL") {{ 'selected' }} @endif>IIFL </option> 
         
         
                	<option value="Aditya Birla" @if ($Compare->bank_name == "Aditya Birla") {{ 'selected' }} @endif>Aditya Birla</option>   
<option value="Allahabad Bank" @if ($Compare->bank_name == "Allahabad Bank") {{ 'selected' }} @endif>Allahabad Bank</option>
<option value="Andhra Ban" @if ($Compare->bank_name == "Andhra Ban") {{ 'selected' }} @endif>Andhra Bank</option>
<option value="Axis Bank" @if ($Compare->bank_name == "Axis Bank") {{ 'selected' }} @endif>Axis Bank</option>
<option value="Bajaj Finserv" @if ($Compare->bank_name == "Bajaj Finserv") {{ 'selected' }} @endif>Bajaj Finserv</option>
<option value="Bandhan Bank" @if ($Compare->bank_name == "Bandhan Bank") {{ 'selected' }} @endif>Bandhan Bank</option>
<option value="Bank of Baroda" @if ($Compare->bank_name == "Bank of Baroda") {{ 'selected' }} @endif>Bank of Baroda</option>
<option value="Bank of India" @if ($Compare->bank_name == "Bank of India") {{ 'selected' }} @endif>Bank of India</option>
<option value="Bank of Maharastra" @if ($Compare->bank_name == "Bank of Maharastra") {{ 'selected' }} @endif>Bank of Maharastra</option>
<option value="Canara Bank" @if ($Compare->bank_name == "Canara Bank") {{ 'selected' }} @endif>Canara Bank</option>
<option value="Central Bank of India" @if ($Compare->bank_name == "Central Bank of India") {{ 'selected' }} @endif>Central Bank of India</option>
<option value="Citibank" @if ($Compare->bank_name == "Citibank") {{ 'selected' }} @endif>Citibank</option>
<option value="Corporation Bank" @if ($Compare->bank_name == "Corporation Bank") {{ 'selected' }} @endif>Corporation Bank</option>
<option value="Dena Bank" @if ($Compare->bank_name == "Dena Bank") {{ 'selected' }} @endif>Dena Bank</option>
<option value="DCB Bank" @if ($Compare->bank_name == "DCB Bank") {{ 'selected' }} @endif>DCB Bank</option>
<option value="Federal Bank" @if ($Compare->bank_name == "Federal Bank") {{ 'selected' }} @endif>Federal Bank</option>
<option value="Fullerton India" @if ($Compare->bank_name == "Fullerton India") {{ 'selected' }} @endif>Fullerton India</option>
<option value="HDFC Bank" @if ($Compare->bank_name == "HDFC Bank") {{ 'selected' }} @endif>HDFC Bank</option>
<option value="HSBC Bank" @if ($Compare->bank_name == "HSBC Bank") {{ 'selected' }} @endif>HSBC Bank</option>
<option value="ICICI Bank" @if ($Compare->bank_name == "ICICI Bank") {{ 'selected' }} @endif>ICICI Bank</option>
<option value="IDBI" @if ($Compare->bank_name == "IDBI") {{ 'selected' }} @endif>IDBI</option>
<option value="IndusInd Bank" @if ($Compare->bank_name == "IndusInd Bank") {{ 'selected' }} @endif>IndusInd Bank</option>
<option value="IDFC Bank" @if ($Compare->bank_name == "IDFC Bank") {{ 'selected' }} @endif>IDFC Bank</option>
<option value="Jammu and Kashmir Bank" @if ($Compare->bank_name == "Jammu and Kashmir Bank") {{ 'selected' }} @endif>Jammu and Kashmir Bank</option>
<option value="Karnataka Bank" @if ($Compare->bank_name == "Karnataka Bank") {{ 'selected' }} @endif>Karnataka Bank</option>
<option value="Karur Vysya Bank" @if ($Compare->bank_name == "Karur Vysya Bank") {{ 'selected' }} @endif>Karur Vysya Bank</option>
<option value="Kotak Bank" @if ($Compare->bank_name == "Kotak Bank") {{ 'selected' }} @endif>Kotak Bank</option>
<option value="Lakshmi Vilas Bank" @if ($Compare->bank_name == "Lakshmi Vilas Bank") {{ 'selected' }} @endif>Lakshmi Vilas Bank</option>
<option value="Nainital Bank" @if ($Compare->bank_name == "Nainital Bank") {{ 'selected' }} @endif>Nainital Bank</option>
<option value="Oriental Bank of Commerce" @if ($Compare->bank_name == "Oriental Bank of Commerce") {{ 'selected' }} @endif>Oriental Bank of Commerce</option>
<option value="Punjab and Sind Bank" @if ($Compare->bank_name == "Punjab and Sind Bank") {{ 'selected' }} @endif>Punjab and Sind Bank</option>
<option value="Punjab National Bank" @if ($Compare->bank_name == "Punjab National Bank") {{ 'selected' }} @endif>Punjab National Bank</option>
<option value="RBL" @if ($Compare->bank_name == "RBL") {{ 'selected' }} @endif>RBL</option>
<option value="Standard Chartered Bank" @if ($Compare->bank_name == "Standard Chartered Bank") {{ 'selected' }} @endif>Standard Chartered Bank</option>
<option value="State Bank of India/SB" @if ($Compare->bank_name == "State Bank of India/SB") {{ 'selected' }} @endif>State Bank of India/SBI</option>
<option value="Syndicate Bank" @if ($Compare->bank_name == "Syndicate Bank") {{ 'selected' }} @endif>Syndicate Bank</option>
<option value="Tata Capital" @if ($Compare->bank_name == "Tata Capital") {{ 'selected' }} @endif>Tata Capital</option>
<option value="UCO Bank" @if ($Compare->bank_name == "UCO Bank") {{ 'selected' }} @endif>UCO Bank</option>
<option value="United Bank of India" @if ($Compare->bank_name == "United Bank of India") {{ 'selected' }} @endif>United Bank of India</option>
<option value="Vijaya Bank" @if ($Compare->bank_name == "Vijaya Bank") {{ 'selected' }} @endif>Vijaya Bank</option>
<option value="Yes Bank"  @if ($Compare->bank_name == "Yes Bank") {{ 'selected' }} @endif>Yes Bank</option></select>  
    </div>
    
  </div>
  
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Loan Type</label>
     <select class="form-control " name="loans_type" required="">
         <option value="personal-loan"  @if ($Compare->loans_type == "personal-loan") {{ 'selected' }} @endif>Personal Loan</option>   
<option value="business-loan"  @if ($Compare->loans_typ == "business-loan") {{ 'selected' }} @endif>Business Loan</option>
<option value="home-loan"   @if ($Compare->loans_type == "home-loan") {{ 'selected' }} @endif>Home Loan</option>
<option value="car-loan"   @if ($Compare->loans_type == "car-loan") {{ 'selected' }} @endif>Car Loan</option>
<option value="car-loan"   @if ($Compare->loans_type == "loan-against-property") {{ 'selected' }} @endif>Loan Against Property</option>

</select>
    </div>
    
  </div>
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Name of Bank</label>
      <input type="text" class="form-control"  placeholder="" name="name_of_bank" required="" value="{{$Compare->name_of_bank}}">
    </div>
    
  </div>     
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Interest Rate</label>
      <input type="text" class="form-control"  placeholder="" min="0" name="interest_rate" required="" value="{{$Compare->interest_rate}}">
    </div>
    
  </div> 
    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Interest Rate show</label>
      <input type="text" class="form-control"  placeholder=""  name="interest_rate_text" required="" value="{{$Compare->interest_rate_text}}">
    </div>
    
  </div>     
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Loan Amount</label>
      <input type="text" class="form-control"  placeholder="" name="loan_amount" required="" value="{{$Compare->loan_amount}}">
    </div>
            </div> 
            <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Loan Amount show</label>
      <input type="text" class="form-control"  placeholder="" name="loan_amount_show" required="" value="{{$Compare->loan_amount_show}}">
    </div>
    
  </div> 
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Tenure</label>
      <input type="text" class="form-control"  placeholder="" name="tenure" required="" value="{{$Compare->tenure}}">
    </div>
    
  </div> 
        
         <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Monthly Income</label>
      <input type="text" class="form-control"  placeholder="" name="monthly_income" required="" value="{{$Compare->monthly_income}}">
    </div>
    
  </div> 
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Processing fee</label>
      <input type="text" class="form-control"  placeholder="" name="processing_fee"  value="{{$Compare->processing_fee}}">
    </div>
    
  </div> 
        
        
    
 
 
 
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
                   

                </div>
              
                
  
    
@endsection
