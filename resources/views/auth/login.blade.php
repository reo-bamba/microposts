@extends('layouts.app')

@section('content')
    <div class = "text-cernter">
        <hi>Log In </hi>
    </div>
    
    <div class = "row">
         <div class="col-sm-6 offset-sm-3">
        {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            {{-- link to user registration page --}}
            <p class = "mt-2">New User?{!! link_to_route('signup.get', 'sign up now!') !!}</p>
        </div>
    </div>
    @endsection