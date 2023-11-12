@extends('layouts/main')

@section('container')

<header class="w-screen h-screen flex justify-center items-center">
    <form action="/actionregister" class="border w-96  flex justify-center items-center rounded-t-lg flex-col" method="post">
        @csrf
        <img src="img/laki-laki.png" alt="" class="w-48">
        <label for="text" class="w-full ">
            <span class="ml-2 text-xl after:content-['*'] after:text-pink-500 after:ml-0.5">Username</span>
            <input type="text"  class="w-full block rounded-lg border p-4 text-md placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700" placeholder="Username" id="username" name="name" autofocus>
        </label>
        <label for="email" class="w-full ">
            <span class="ml-2 text-xl after:content-['*'] after:text-pink-500 after:ml-0.5">Email</span>
            <input type="email"  class="w-full block rounded-lg border p-4 text-md placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700" placeholder="Username" id="email" name="email" autofocus>
        </label>
        <label for="password" class="w-full mt-1" >
            <span class="ml-2 text-xl after:content-['*'] after:text-pink-500 after:ml-0.5">Password</span>
            <input type="password"  class="w-full block rounded-lg border p-4 text-md placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700" placeholder="Password" id="password" name="password">
        </label>
       <button class="p-3 bg-green-500 w-full rounded-full mt-5 font-bold text-white hover:bg-green-700" type="submit">Register!</button>
       <p>Allready Register? <a href="/" class="text-blue-400 hover:text-blue-700">Login</a></p>
    </form>
</header>

@endsection