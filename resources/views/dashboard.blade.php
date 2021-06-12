@extends('layouts.app')

@section('content')
        <div class="dashboard">
            <h1>Dashboard</h1>
        </div>
        @auth
            <p> Hello, Welcome to your Dashboard, {{auth()->user()->name}}</p>      
        @endauth   
        {{-- @guest
            <p> Hello, Welcome to the Dashboard</p>      
        @endguest --}}
@endsection

@section('sidebar')
<div class ="col-md-4 col-lg-4">
    @include('inc.sidebar')
</div>
@endsection
