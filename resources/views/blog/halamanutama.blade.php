@extends('template.main')

@section('title','Halaman Utama')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @guest
      <li class="nav-item active">
        <a class="nav-link" href="{{route('loginpage')}} ">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('registrasi')}}">Register</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logoutbtn') }}">Logout</a>
      </li>
      @endguest
      @if(auth()->user()->isAdmin == 1)
      <li class="nav-item">
        <a href="{{route('adminpanel')}}" class="nav-link">Admin Panel</a>
      </li>
      @endif
    </ul>
  </div>
</nav>
<div class="container">
    <h1>ini adalah halaman blog saya,halaman lain selain login bawaan</h1>
    </div>
@endsection('content')