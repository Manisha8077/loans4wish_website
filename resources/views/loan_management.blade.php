@extends('layouts.app')

@section('content')
 <div class="container-fluid">
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
  <form action="{{route('update-loan-management')}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('POST')
  <div class="form-row">
    
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Personal Loan</label>
      <?php $personal_loan=getRate("personal-loan");?>
      <input type="text" class="form-control"  placeholder="" name="rate[]" required="" value="<?php echo $personal_loan->rate;?>">
      <input type="hidden" class="form-control"  placeholder="" name="id[]" required="" value="<?php echo $personal_loan->id;?>">
    </div>
    
  </div>  
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Business loan</label>
       <?php $business_loan=getRate("business-loan");?>
      <input type="text" class="form-control"  placeholder="" name="rate[]" required="" value="<?php echo $business_loan->rate;?>">
       <input type="hidden" class="form-control"  placeholder="" name="id[]" required="" value="<?php echo $business_loan->id;?>">
    </div>
    
  </div>  
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Home loan</label>
       <?php $business_loan=getRate("home-loan");?>
      <input type="text" class="form-control"  placeholder="" name="rate[]" required="" value="<?php echo $business_loan->rate;?>">
       <input type="hidden" class="form-control"  placeholder="" name="id[]" required="" value="<?php echo $business_loan->id;?>">
    </div>
    
  </div>  
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Car loan</label>
       <?php $business_loan=getRate("car-loan");?>
      <input type="text" class="form-control"  placeholder="" name="rate[]" required="" value="<?php echo $business_loan->rate;?>">
       <input type="hidden" class="form-control"  placeholder="" name="id[]" required="" value="<?php echo $business_loan->id;?>">
    </div>
    
  </div>       
        
        
        
 
 
 
  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
                   
 <script>
CKEDITOR.replace( 'editor' );
</script>
                </div>
              
                
  
    
@endsection
