@extends('layouts.app')

@section('content')
 <div class="container-fluid">
<?php echo $Slider->title1;?>
<?php echo $Slider->title2;?>  
     <?php echo $Slider->url_1;?>
    <?php echo $Slider->url_2;?> 
      <img src="{{asset('assets/images/web_img/'.$Slider->image)}}"  width="200" height="100" style="border: 2px solid #555;"> 
 
                   
 
                </div>
              
                
  
    
@endsection
