@extends('layouts.app')

@section('content')
 <div class="container-fluid">
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
  <form action="{{route('update-page',$Pages->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Title</label>
      <input type="title" class="form-control"  placeholder="" name="title" required="" value="{{$Pages->title}}">
    </div>
    
  </div>
 
  <div class="form-row">
   <div class="form-group col-md-12">
    <label for="inputAddress2">Content</label>
    <textarea  class="form-group col-md-12" id="editor" name="content" rows="10"  required="">{{$Pages->content}}</textarea>
    </div>
  </div>
 
  
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
                   
 <script>
CKEDITOR.replace( 'editor' );
 CKEDITOR.config.allowedContent = true;
</script>
                </div>
              
                
  
    
@endsection
