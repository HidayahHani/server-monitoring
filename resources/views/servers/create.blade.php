@extends('layout')

@section('title', 'Create server')

@section('content')
<h1>Add new IP Address</h1>
<div>
    <form method="POST" action="{{ route('servers.store') }}">
        @csrf
        <label>
            <span>Enter URL: </span>
            <input type="text" name="url" id="url" value="">
        </label>
        <br>

        <button class="btn" type="submit">Create</button>
    </form>
</div>
@endsection