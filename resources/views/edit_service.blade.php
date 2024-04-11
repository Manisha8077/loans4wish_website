@extends('layouts.app')

@section('content')
 <div class="container-fluid">

  <form action="{{route('update-service',$Service->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="title" class="form-control"  placeholder="" name="title" required="" value="{{$Service->title}}">
    </div>
    
  </div>
   
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Apply Url </label>
      <input type="title" class="form-control"  placeholder="" name="apply_url" required="" value="{{$Service->apply_url}}">
    </div>
    
  </div>     
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Compare Url</label>
      <input type="title" class="form-control"  placeholder="" name="compare_url" required="" value="{{$Service->compare_url}}">
    </div>
    
  </div> 
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">EMI Url</label>
      <input type="title" class="form-control"  placeholder="" name="emi_url" required="" value="{{$Service->emi_url}}">
    </div>
    
  </div> 
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Content</label>
      <br/>
      <textarea name="content" rows="5" cols="100">{{$Service->content}}</textarea>
    </div>
    
  </div>      
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Image</label>
      <input type="file" class="form-control"  placeholder="" name="image" required="" value="">
       <input type="hidden" id="edit_image" name="edit_image" value="<?php echo $Service->image;?>"> 
    </div>
    <img src="{{asset('assets/images/web_img/'.$Service->image)}}"  width="200" height="100" style="border: 2px solid #555;"> 
  </div>     
 
 
 
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
                   

                </div>
              
                
  
    
@endsection
