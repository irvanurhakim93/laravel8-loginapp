@extends('template.main')

@section('title','Halaman Login')

@section('content')
<div class="container">
    <div class="card">
      <div class="card-header text-center">
        Login
      </div>
      <div class="card-body">
      <h3>Login</h3>
    <form method="post" action="{{route('postloginblog')}}">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan username..." value="{{ old ('email')}}">
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
     </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="exampleInputPassword1" placeholder="*****">
    @error('password')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>

  <!-- akhir dari div container -->
    </div>
@endsection('content')