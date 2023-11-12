@extends('layouts/main')

@section('container')

<header class="w-screen h-screen flex justify-center items-center">
    <form action="" class="border w-96  flex justify-center items-center rounded-t-lg flex-col">
        <img src="img/laki-laki.png" alt="" class="w-48">
        <label for="password" class="w-full mt-1" >
            <span class="ml-2 text-xl after:content-['*'] after:text-pink-500 after:ml-0.5">Old Password</span>
            <input type="password"  class="w-full block rounded-lg border p-4 text-md placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700" placeholder="Password" id="password" name="password">
        </label>
        <label for="password" class="w-full mt-1" >
            <span class="ml-2 text-xl after:content-['*'] after:text-pink-500 after:ml-0.5">New Password</span>
            <input type="password"  class="w-full block rounded-lg border p-4 text-md placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700" placeholder="Password" id="password" name="password">
        </label>
        <label for="password" class="w-full mt-1" >
            <span class="ml-2 text-xl after:content-['*'] after:text-pink-500 after:ml-0.5">Confirm New Password</span>
            <input type="password"  class="w-full block rounded-lg border p-4 text-md placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700" placeholder="Password" id="password" name="password">
        </label>
       <button class="p-3 bg-green-500 w-full rounded-full mt-5 font-bold text-white hover:bg-green-700" type="submit">Submit</button>
       <p>Allready Register? <a href="/" class="text-blue-400 hover:text-blue-700">Login</a></p>
    </form>
</header>

@endsection