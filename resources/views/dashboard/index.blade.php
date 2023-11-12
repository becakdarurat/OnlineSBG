@extends('layouts/main')

@section('container')
    <h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>{{Auth::user()->email}}</b>.</h4>
    <a href="/home" class="p-4 shadow-lg border rounded-lg">Home</a>
@endsection