@extends('layouts.app')

@section('content')

<h2 > Profile </h2>
<div class="justify-center">
    @if (session('status'))
        <div class="alert">
            {{session('status')}}
        </div>
    @endif
    <form method="POST" action="/profile">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control @error('name')  @enderror" name="name" placeholder="Enter Name" value="{{auth()->user()->name}}">
            
            @error('name')
                <div class="alert">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{auth()->user()->email}}">

            @error('email')
                <div class="alert">
                    {{$message}}
                </div>
            @enderror
        </div>
    </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

@endsection
