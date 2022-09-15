<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img/buaya.png" type="image/gif" sizes="20x20">
    <title>Produk terbaru</title>
</head>
<body>
    @include('template.nav')
    <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/9/2/25a82b40-976a-449f-9b97-9fd310cdb4d3.jpg.webp?ect=3g" style="width: 88rem">
    @if (Session::has('status'))
    <div><h4 class="text-right" style="color: gray">{{ Session::get('status') }}</h4></div>
    @endif
    @include('template.card')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>