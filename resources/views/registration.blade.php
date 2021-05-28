@extends('layouts.app')

@section('content')

<h2> Register </h2>

<form method="POST" action="/registration">
    @csrf
        <div class="form-group">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
        </div>

        <div class="form-group">
            <label for="name">Last Name:</label>
            <input type="text" class="form-control"  name="lname" placeholder="Enter Last Name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password"  placeholder="Enter Password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
</form>
@endsection