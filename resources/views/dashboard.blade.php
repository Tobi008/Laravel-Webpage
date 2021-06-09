@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="dashboard">
            <h2>Dashboard</h2>
        </div>
        @auth
            <p> Hello, Welcome to your Dashboard, {{auth()->user()->name}}</p>      
        @endauth

        @guest
            <p> Hello, Welcome to the Dashboard</p>      
        @endguest
    </div>
@endsection