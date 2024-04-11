<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- <script src="{!! url('assets/tinymce/js/tinymce.min.js') !!}"></script> -->

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            init_instance_callback: function(editor) {
                var freeTiny = document.querySelector('.tox .tox-notification--in');
                freeTiny.style.display = 'none';
            }
        });
    </script>

    <style>
        .admin-header {
            display: block;
            margin: auto;
            width: 100%;
        }
    </style>
</head>

<body>





    <div class="container">

        <!-- <h1 class = "admin-header"> Update File </h1> -->
        <h1 class="text-center"> List Content </h1>
        <a  href="https://www.myzeon.com/page-content-add"><Button>Add Content</Button> </a>
        <div class="row">
            <div class="col-md-12">
               
        <div class="table-responsive">
        <table class="table">
                   
           <tr>
              <th>S.No</th>
              <th>Heading</th>
              <th>Main Heading</th>
              <th>Loan Type</th>
              <th>Status</th>
              <th>Action</th>
           </tr>

            @foreach($update_list as $key => $value)
           <tr>
               <td>{{ $key+1 }}</td>
               <td>{{ Str::limit($value->main_heading,50) }}</td>
               <td>{{ Str::limit($value->main_content,50) }}</td>
               <td>{{ $value->loan_type }}</td>
               <td>{{ $value->status }}</td>
               <td><a href="https://www.myzeon.com/page-content-edit/{{ $value->id }}"><Button>Edit</Button></a></td>
         
           </tr>
            @endforeach
        </table>
        </div>


            </div>
        </div>
    </div>


    <script>
        // $( document ).ready(function() {
        //     tinymce.init({
        //             selector: 'textarea#tinymce',
        //             height: 600
        //     });  
        // })
    </script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>