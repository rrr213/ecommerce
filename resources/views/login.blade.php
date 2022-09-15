<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img/buaya.png" type="image/gif" sizes="16x16">
    <title>Login</title>
</head>
<body>
    @include('template.nav')
   <div class="container">
    <div class="row">
      <h5 class="title text-center">Silahkan Login atau registrasi</h5>
        <form action="{{ route('postlogin') }}" method="POST" class="form-group">
          @csrf
          <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" required class="form-control">
           </div>
           <div class="mb-3">
           <label for="">Password</label>
           <input type="password" name="password" required class="form-control">
           </div>
           @if (Session::has('status'))
           <div><span class="text-center" style="color: red">{{ Session::get('status') }}</span></div>
           @endif
           <button class="btn-success">Login</button>
           <a href="{{ route('regist') }}" class="btn btn-outline-success">Registrasi</a>
        </form>
    </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>