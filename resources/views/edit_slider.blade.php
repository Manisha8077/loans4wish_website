@extends('layouts.app')

@section('content')
 <div class="container-fluid">

  <form action="{{route('update-slider',$Slider->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="title" class="form-control"  placeholder="" name="title1" required="" value="<?php echo $Slider->title1;?>">
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Sub Title </label>
      <input type="title" class="form-control"  placeholder="" name="title2" required="" value="<?php echo $Slider->title2;?>">
    </div>
    
  </div>  
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Apply Now (Url)</label>
      <input type="title" class="form-control"  placeholder="" name="url1" required="" value="<?php echo $Slider->url_1;?>">
    </div>
    
  </div>     
        
        
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Contact Us(Url)</label>
      <input type="title" class="form-control"  placeholder="" name="url2" required="" value="<?php echo $Slider->url_2;?>">
    </div>
    
  </div>    
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Image</label>
      <input type="file" class="form-control"  placeholder="" name="image"  value="">
        <input type="hidden" id="edit_image" name="edit_image" value="<?php echo $Slider->image;?>"> 
    </div>
    <img src="{{asset('assets/images/web_img/'.$Slider->image)}}"  width="200" height="100" style="border: 2px solid #555;"> 
   
  </div>     
 
 
  
   <br/>
    <br/>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
                   
 
                </div>
              
                
  
    
@endsection
