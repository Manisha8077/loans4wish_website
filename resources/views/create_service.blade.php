@extends('layouts.app')

@section('content')
 <div class="container-fluid">

  <form action="{{route('insert-service')}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('POST')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="title" class="form-control"  placeholder="" name="title" required="" value="">
    </div>
    
  </div>
   
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Apply Url </label>
      <input type="title" class="form-control"  placeholder="" name="apply_url" required="" value="">
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
