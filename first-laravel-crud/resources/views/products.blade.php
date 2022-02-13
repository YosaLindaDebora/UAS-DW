<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stok Products</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('style/style.css')}}"> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Stok Barang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Masukan Data Stok</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/products">Lihat Stok</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $products)
              <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$products->nama_barang}}</td>
                  <td>{{$products->harga}}</td>
                  <td>{{$products->stok}}</td>
                  <td>
                    <a href="/edit/{{$products->id}}" class="btn btn-success">Edit</a>
                    <hr>
                    <form action="/delete/{{$products->id}}" method="POST">
                      @csrf
                      @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
              </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>