@extends('layouts.app')

@section('content')

<h2> Login </h2>
<div class="justify-center">
    @if (session('status'))
        <div class="alert">
            {{session('status')}}
        </div>
    @endif
    <form method="POST" action="/login-form">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{old('email')}}">

            @error('email')
                <div class="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password"  placeholder="Enter Password">

            @error('password')
                <div class="alert">
                    {{$message}}
                </div>
        @enderror
    </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

@endsection
