@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
        </div>
    </div>
@endsection