@extends('layouts.master')

@section('title', 'Home')

@push('css')
<style>
    body {
        background-color: #f4f6f9;
        height: 100vh;
    }
    .card {
        width: 100%;
        max-width: 400px;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 50px auto;
    }
    .card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
    .form-control {
        border-radius: 25px;
    }
    .btn-primary {
        background-color: #28a745;
        border: none;
        border-radius: 25px;
    }
    .btn-primary:hover {
        background-color: #218838;
    }
    .text-small {
        font-size: 0.9rem;
    }
    .social-icons i {
        font-size: 1.3rem;
        margin-right: 10px;
        color: #555;
        cursor: pointer;
    }
</style>
@endpush


@section('content')

<div class="card">
    <img src="{{ asset('assets/login_banner.jpg') }}" alt="Header Image">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h3 class="text-center mb-4">Sign In</h3>
            </div>
            <div class="text-center social-icons mb-3">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" >
            </div>
            @error('username')
                <span class="invalid-feedback" class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" >
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </form>
        @if ($errors->any())
            <div class="mt-3 mb-3 alert alert-danger alert-dismissible fade show" role="alert" >
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <div class="d-flex justify-content-between mt-3 text-small">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <a href="#" class="text-muted">Forgot Password</a>
        </div>
        <div class="text-center mt-3">
            <span class="text-muted">Not a member? <a href="#" class="text-success">Sign Up</a></span>
        </div>
    </div>
</div>

@endsection
