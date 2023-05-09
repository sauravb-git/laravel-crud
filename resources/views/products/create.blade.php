<!DOCTYPE html>
<html lang="en">
    <head>
        <title>laravel crud</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-sm bg-dark">

  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="/">Products</a>
      </li>
      
    </ul>
  </div>

</nav>

    <div class="container" >
       <div class="row justify-content-center">
           <div class="col-sm-8">
               <div class="card mt-3 p-3">
                   <form method="POST" action="/products/store" enctype="multipart/form-data" >
                       @csrf
                    <div class="form-group">
                       <lable for="name" >Name</lable>
                       <input type="text" name="name" class="form-control" value="{{ old('name') }}" >
                       @if($errors->has('name'))
                       <span class="text-danger" >{{ $errors->first('name') }}</span>
                       @endif

                   </div>
                   <div class="form-group">
                       <lable for="decription" >Description</lable>
                       <textarea class="form-control" rows="4"  name="decription" >{{ old('decription') }}</textarea>  
                       @if($errors->has('decription'))
                       <span class="text-danger" >{{ $errors->first('decription') }}</span>
                       @endif
                   </div>
                   <div class="form-group mb-2">
                       <lable for="image" >Image</lable>
                       <input type="file" name="image" class="form-control" value="{{ old('image') }}" >
                       @if($errors->has('image'))
                       <span class="text-danger" >{{ $errors->first('image') }}</span>
                       @endif
                   </div>
                   <button type="submit" class="btn btn-dark" >Submit</button>
               </form>
               </div>
               
           </div>
       </div>
    </div>
    
    </body>
</html>