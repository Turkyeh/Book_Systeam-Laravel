@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" autofocus>
            <label for="floatingEmail">Email address</label>
            @error('email')
                <span class="text-danger text-left">{{ $message }}</span>
             @enderror
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('username') }}" placeholder="Username"  autofocus>
            <label for="floatingName">Username</label>
            @error('name')
                <span class="text-danger text-left">{{ $message }}</span>
             @enderror
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" >
            <label for="floatingPassword">Password</label>
            @error('password')
                <span class="text-danger text-left">{{ $message }}</span>
             @enderror
        </div>



        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('auth.partials.copy')
    </form>
@endsection
