<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img/buaya.png" type="image/gif" sizes="16x16">
    <title>Produk terbaru</title>
</head>
<body>
    @include('template.nav')
   
    <div class="container mt-5">
        <div class="row">

            <div class="col-4">
                <div class="card">
                    <img src="img/terlaris 2.jpg" alt="" class="card-img-top">
                </div>
            </div>

            <div class="col-8">
              <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Iphone 12 IBOX</h3>
                    <hr>
                    <p class="card-text">Rp. 25000000</p>
                    <p class="card-text">Jumlah : 1</p>
                    <p class="card-text">Total : Rp. 25000000</p>
                    <hr>
                    <h5 class="card-title">Bukti bayar</h5>
                    <hr>
                    <input type="file" name="" id="">
                    <hr>
                    <h5 class="card-title">Keterangan</h5>
                    <p class="card-text">Upload bukti bayar dan tunggu proses selanjutnya </p>

                    <a href="{{ route('home') }}"class="btn btn-success">Bayar</a>
                </div>
              </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>