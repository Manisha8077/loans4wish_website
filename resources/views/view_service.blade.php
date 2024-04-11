@extends('layouts.app')

@section('content')
 <div class="container-fluid">
{{$Service->title}}
{{$Service->apply_url}}
{{$Service->compare_url}}
{{$Service->emi_url}}
{{$Service->content}}
 <img src="{{asset('assets/images/web_img/'.$Service->image)}}"  width="200" height="100" style="border: 2px solid #555;"> 


                </div>
              
                
  
    
@endsection
