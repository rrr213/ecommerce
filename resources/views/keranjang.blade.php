<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img/buaya.png" type="image/gif" sizes="16x16">
    <title>Keranjang</title>
</head>
<body>

    @include('template.nav')
 
    <div class="container mt-5">
        <h4 class="text-center text-success">Keranjang</h4>
        <br>
        @foreach ($dt as $i)
        <div class="card mt-3"> 
            <div class="row">

                <div class="col-2 p-4">
                    <img src="{{ asset($i->produk->foto) }}" alt="" class="img-thumbnail">
                </div>

                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $i->produk->name }}</h5>
                        <p class="card-text">Rp. {{ $i->produk->harga }}</p>
                        <form action="{{ route('bayar') }}" class="form-group">
                            <input type="number" placeholder="Jumlah" name="jumlah" required class="form-control">
                        <h5 class="card-title">Total : {{ $i->totalharga }}</h5>
                    </div>
                </div>

                <div class="col-2 p-4">
                    <button type="submit" class="btn btn-success">Bayar</button>
                    <a href="" class="btn btn-danger">Hapus</a>
                </div>
                        </form>
            </div>               
        </div>
        @endforeach
    </div>





    {{-- <a href="https://shopee.co.id/COD-katridge-Vinccci-x-vinccci-40w-i.404726877.10459250154?xptdk=a2ed7e16-24e3-4ee8-842d-ff7d3f8e2e16">dfggyu</a> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>