@extends('layouts.homeLayout')

@section('content')

    @if(Request::url() == 'http://127.0.0.1:8000/register')
        @section('title')
            Register
        @endsection
        <x-forms.register-form :cities="$cities"/>
    @elseif(Request::url() == 'http://127.0.0.1:8000/login')
        @section('title')
            Login
        @endsection
        <x-forms.login-form/>
    @elseif(Request::url() == 'http://127.0.0.1:8000/forgetPassword')
        @section('title')
            Forget password
        @endsection
        <x-forms.forget-password-form/>

    @else
        @section('title')
            Reset password
        @endsection
        <x-forms.reset-password-form :token="$token"/>
    @endif

@endsection
