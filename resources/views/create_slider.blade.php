@extends('layouts.app')

@section('content')
 <div class="container-fluid">
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
  <form action="{{route('insert-slider')}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('POST')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="title" class="form-control"  placeholder="" name="title1" required="" value="">
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Sub Title</label>
      <input type="title" class="form-control"  placeholder="" name="title2" required="" value="">
    </div>
    
  </div>  
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Apply Now (Url)</label>
      <input type="title" class="form-control"  placeholder="" name="url1" required="" value="">
    </div>
    
  </div>     
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Contact Us (Url)</label>
      <input type="title" class="form-control"  placeholder="" name="url2" required="" value="">
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
                   
 <script>
CKEDITOR.replace( 'editor' );
</script>
                </div>
              
                
  
    
@endsection
