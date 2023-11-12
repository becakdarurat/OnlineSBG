@extends('layouts/main')

@section('container')
        <div class="container-none mx-auto">
           <header class="border flex justify-between p-4">
                <nav class="">OSG</nav>
                <ul class="flex flex-wrap">
                    <li class="mr-4">Minuman</li>
                    <li class="mr-4">Makanan</li>
                    <li class="mr-4">Toko</li>
                    <li class="mr-4">Kurir</li>
                </ul>
                <a href="">Logout</a>
           </header>
           <div class="columns-3 p-0 ">
              <div class="border h-screen">1</div>
              <div class="border h-screen">2</div>
              <div class="border h-screen">3</div>
           </div>
        </div>
        <h1 class="my-80">Selamat Datang di Home!</h1>
        <form action="/actionlogout" method="post">
                @csrf
                <button class="p-4 bg-slate-200" type="submit">Keluar</button>
        </form>
@endsection