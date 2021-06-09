@extends('layouts.app')

@section('content')

<h2> Register </h2>
<div class="justify-center">
    <form method="POST" action="/registration">
        @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control @error('name')  @enderror" name="name" placeholder="Enter Name" value="{{old('name')}}">
                
                @error('name')
                    <div class="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>

        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control"  name="username" placeholder="Enter Username" value="{{old('username')}}">

            @error('username')
                <div class="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

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
            <label for="password_confirmation">Re-type Password:</label>
            <input type="password" class="form-control" name="password_confirmation"  placeholder="Enter Password">

            @error('password_confirmation')
                <div class="alert">
                    {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>

@endsection
