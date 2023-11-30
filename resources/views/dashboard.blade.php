@extends('template.main')

@section('title','Dashboard')

@section('content')
<div class="container">
<h1>Selamat datang</h1>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissable fade show">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissable fade show">
    {{session('loginError')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

<!-- akhir dari div container -->
</div>
@endsection('content')