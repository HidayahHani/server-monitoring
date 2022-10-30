@extends('layout')

@section('title', 'Login')

@section('content')
<h1>login page</h1>
<div>
    <form>
        <label>
            <span>ID:</span>
            <input type="text" name="id" id="id" value="">
        </label>

        <label>
            <span>Password:</span>
            <input type="password" name="password" id="password" value="">
        </label>

        <button class="btn" type="submit">Login</button>
        <a href="{{ route('users.register') }}">New User? Register Now!</a>
    </form>
</div>
@endsection