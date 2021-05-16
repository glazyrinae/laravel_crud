@push('styles')
    <link href="{{ URL::asset('css/formreg.css') }}" rel="stylesheet">
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5">
                <h5 class="mt-3">Registration form</h5>
                <form method="post" action="/register">
                     {{ csrf_field() }}
                    <div class="form-input">
                        <i class="fa fa-envelope"></i>
                        <input name="email" type="text" class="form-control"
                        placeholder="Email address">
                    </div>
                    <div class="form-input">
                        <i class="fa fa-user"></i>
                        <input name="name" type="text" class="form-control"
                        placeholder="User name">
                    </div>
                    <div class="form-input">
                        <i class="fa fa-lock"></i>
                        <input name="password" type="password" class="form-control"
                        placeholder="password">
                    </div>
                    <div class="form-input">
                        <i class="fa fa-lock"></i>
                        <input name="password1" type="password" class="form-control"
                        placeholder="repeat password">
                    </div>
                    <div class="form-check">
                        <input name="agree" class="form-check-input" type="checkbox" value=""
                        id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            I agree all the statements
                        </label>
                    </div>
                    <input type="submit" class="btn btn-primary mt-4 signup" value="Registration"/>
                    <div class="text-center mt-3">
                        <span>Or continue with these social profile</span>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <span class="social"><i class="fa fa-google"></i></span>
                        <span class="social"><i class="fa fa-facebook"></i></span>
                        <span class="social"><i class="fa fa-twitter"></i></span>
                        <span class="social"><i class="fa fa-linkedin"></i></span>
                    </div>
                    <div class="text-center mt-4"> <span>Already a member?</span>
                        <a href="/login" class="text-decoration-none">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
