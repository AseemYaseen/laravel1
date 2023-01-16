{{-- <!DOCTYPE html>
<html>
   <head>
      <title>Laravel 9 Image Upload Tutorial With Example- ScratchCode.io</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <div class="panel panel-primary">
            <div class="panel-heading mb-3 mt-5">
               <h2>Laravel 9 Image Upload Tutorial With Example</h2>
            </div>
            <div class="panel-body">
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                   </div>
               @endif
  
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
  
               <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="mb-3 col-md-6">
                        <label class="form-label" for="inputEmail">Select Image:</label>
                        <input type="file" name="file" class="form-control"/>
                     </div>
 
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Upload Image...</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html> --}}