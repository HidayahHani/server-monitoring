@extends('layout')

@section('title', 'Register')

@section('content')
<h1>Registration page</h1>
<div>
    <form class="center" method="POST" action="{{ route('users.store') }}">
        @csrf
        <label>
            <span>ID:</span>
            <input class = "form-label" type="text" name="id" id="id" value="">
        </label>
        @error('id')
            <div class="err"> {{ $message }} </div>
        @enderror

        <br>
        <label>
            <span>Name:</span>
            <input type="text" name="name" id="name" value="">
        </label>
        @error('name')
            <div class="err"> {{ $message }} </div>
        @enderror
        <br>

        <label>
            <span>Password:</span>
            <input type="password" name="password" id="password" value="">
        </label> 
        @error('password')
            <div class="err"> {{ $message }} </div>
        @enderror
        <br>

        <label>
            <span>Email Address:</span>
            <input type="text" name="email" id="email" value="">
        </label> 
        @error('email')
            <div class="err"> {{ $message }} </div>
        @enderror
        <br>

        <label>
            <span>Phone Number:</span>
            <input type="text" name="phone" id="phone" value="">
        </label> 
        @error('phone')
            <div class="err"> {{ $message }} </div>
        @enderror
        <br>

        <button class="btn" type="submit">Register</button>
    </form>
</div>
@endsection