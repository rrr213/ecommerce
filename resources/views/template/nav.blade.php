<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <i>
        <img src="img/buaya.png" style="width: 35px" alt="">
    <a href="{{ route('home') }}" class="navbar-brand" aria-current="page">TOKOPELIA</a>
    </i>
   @guest
   <a href="{{ route('login') }}" class="nav-link text-white">Login</a>
   @endguest
   @auth
   <a href="{{ route('keranjang') }}" class="nav-link text-white">Keranjang</a>
   <a href="{{ route('summary') }}" class="nav-link text-white">Transaksi</a>
   <a href="{{ route('logout') }}" class="nav-link text-white ml-auto p-2">Logout</a>
   @endauth
</nav>