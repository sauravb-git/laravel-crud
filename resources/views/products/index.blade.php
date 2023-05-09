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
        <div class="text-end">
            <a href="product/create" class="btn btn-dark mt-4" 
            >New Products</a>
        </div>
      

     <table class="table table-hover" >
       <thead>
           <tr>
           <th>Sno.</th>
           <th>Name</th>
           <th>Image</th> 
           <th>Action</th> 
            <tr> 
        </thead> 
        <tbody> 
          @foreach($products as $product)
          </tr>
            <td>{{ $loop->index }}</td>
            <td>{{ $product->name }}</td>
            <td>
              <img src="products/{{ $product->image }}" alt="image"
              class="rounded-circle" width="30" heigth="30" >
            </td>
            <td> 
              <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm" >Edit</a> 
              <form class="d-inline"
               action="products/{{ $product->id }}/delete" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>  
     </table>

    </div>
    
    </body>
</html>