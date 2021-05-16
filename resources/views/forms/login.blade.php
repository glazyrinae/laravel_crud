@push('styles')
    <link href="{{ URL::asset('css/formlogin.css') }}" rel="stylesheet">
@endpush
@extends('layouts.default')
@section('title')
login
@stop
@section('content')
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">{{ $error }}</div>
    @endforeach
@endif
<div class="text-center">
    <main class="form-signin">
      <form action="/login" method="post" >
          {{ csrf_field() }}
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

          <div class="form-floating">
              <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
              <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
              <label>
                  <input type="checkbox" value="remember-me"> Remember me
              </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <a href="/" class="nav-link px-2 text-secondary">or you may register</a>
      </form>
    </main>
</div>
@stop
