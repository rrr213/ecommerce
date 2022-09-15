<?php

namespace App\Http\Controllers;

use App\Models\detailtransaksi;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class UserController extends Controller
{
    public function home()
    {
        $data = produk::all();
        return view('welcome', compact('data'));
    }

    public function detail(produk $produk)
    {
        return view('main', compact('produk'));
    }

    public function login()
    {
        return view('login');
    }

   public function postlogin(Request $request)
   {
    $cek = $request->validate([
        'email'=>'required',
        'password'=>'required'
    ]);
    if(Auth::attempt($cek)){
        $user = Auth::user();
        return redirect()->route('home')->with('status','Selamat Datang '.$user->name);
    }
    return back()->with('status','Email atau password salah');
   }

    public function regist()
    {
        return view('regist');
    }
    
    public function postregist(Request $request)
    {
        $df = $request-> validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        user::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'customer'
        ]);
        return redirect()->route('login')->with('status','Daftar berhasil');
    }

    public function postkeranjang(Request $request, produk $produk)
    {
        $request->validate([
            'qty'=>'required',
        ]);
        detailtransaksi::create([
            'user_id'=>Auth::id(),
            'produk_id'=>$produk->id,
            'qty'=>$request->qty,
            'status'=>'keranjang',
            'totalharga'=>$produk->harga * $request->qty,
        ]);
        return redirect()->route('home')->with('status','Produk berhasil di masukan');
    }

    public function keranjang()
    {
        $dt = detailtransaksi::where('status','keranjang')->with('produk')->get();
        return view('keranjang', compact('dt'));
    }

    public function bayar()
    {
        return view('bayar');
    }

    public function summary()
    {
        return view('summary');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home')->with('status','Berhasil Logout');
    }
}
