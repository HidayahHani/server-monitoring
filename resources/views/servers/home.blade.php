@extends('layout')

@section('title', 'Server list')

@section('content')
<h1>List of IP address</h1>

<a href="{{ route('servers.create') }}"><button class="btn" type="submit">Add new IP Address</button></a>
@endsection