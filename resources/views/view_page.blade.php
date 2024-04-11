@extends('layouts.app')

@section('content')
 <div class="container-fluid">
{{$Pages->title}}
<br/>
{!! ($Pages->content) !!}
 </div>
              
                
  
    
@endsection
