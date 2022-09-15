<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img/buaya.png" type="image/gif" sizes="16x16">
    <title>Detail Produk</title>
</head>
<body>
    @include('template.nav')
    
    <div class="container">
        <form action="{{ route('postkeranjang', $produk->id) }}" method="POST" class="form-group">
            @csrf
        <div class="row">
            <div class="col-4 mt-5">
               <div class="card">
                <img src="{{ asset($produk->foto) }}" alt="" class="card-img-top">
               </div>
            </div>
    
            <div class="col-4 mt-5">
                <div class="card">
                    <h5 class="card-title">{{ $produk->name }}</h5>
                    <h3 class="card-text">Rp. {{ $produk->harga }}</h3>
                    <input type="number" name="qty" class="form-control" required placeholder="jumlah">
                    <p class="card-text"><b>Detail :</b>  {{ $produk->detail }}</p>
                </div>
            </div>
    
    <div class="col-4 mt-5">
        <div class="card">
            <h5 class="card-title">Kategori:  {{ $produk->kategori->name }}</h5>
            <a href="{{ route('bayar') }}" class="btn btn-success">Beli sekarang</a>
            <button class="btn btn-outline-success" type="submit">Keranjang</button>
        </form>
        </div>
    </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>