@extends('layouts.master')

@section('title', 'Dashboard')


@section('content')
    <div class="container mt-5">
        <h1 class="text-center mt-5 mb-4">Welcome Dashboard</h1>

        <h3>Create User</h3>
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('create-user') }}" method="POST">
            @csrf

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

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group col-md-6">
                    <label>Address</label>
                    <textarea name="address"  class="form-control"  cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
@endsection
