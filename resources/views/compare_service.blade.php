@extends('layouts.app')

@section('content')
 <div class="container-fluid">

  <form action="{{route('insert-compare')}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('POST')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Bank Name</label>
      <select class="form-control" name="bank_name" required="">
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
      <label for="inputEmail4">Name Of bank </label>
      <input type="title" class="form-control"  placeholder="" name="name_of_bank"  value="">
    </div>
    
  </div>     
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Compare Url</label>
      <input type="title" class="form-control"  placeholder="" name="compare_url" required="" value="">
    </div>
    
  </div> 
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">EMI Url</label>
      <input type="title" class="form-control"  placeholder="" name="emi_url" required="" value="">
    </div>
    
  </div> 
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Content</label>
      <br/>
      <textarea name="content" rows="5" cols="100"></textarea>
    </div>
    
  </div>      
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Image</label>
      <input type="file" class="form-control"  placeholder="" name="image" required="" value="">
    </div>
    
  </div>     
 
 
 
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
                   

                </div>
              
                
  
    
@endsection
