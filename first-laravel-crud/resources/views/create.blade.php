<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Stok Barang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Masukan Data Stok</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products">Lihat Stok</a>
            </li>
          </ul>
      </div>
  </nav>
    
      <div class="container mt-5" style="width: 33%;">
        <form class="mb-4" action="/store" method="POST"> 
          @csrf
            <h1 class="text-center mb-4">Buat Produk</h1>
            <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="number" class="form-control" name="stok">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Kirim</button>
        </form>
    </div>
<script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>
</html>