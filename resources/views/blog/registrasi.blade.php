@extends('template.main')

@section('title','Halaman Registrasi')

@section('content')
<div class="container">
    <div class="card">
      <div class="card-header text-center">
        Registrasi
      </div>
      <div class="card-body">
      <h3>Registrasi</h3>
    <form method="post" action="{{route('postregistrasi')}} ">
        @csrf
        <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan username...">
    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
     </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="">
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