@extends('layout')

@section('title', 'Server list')

@section('content')
<h1>List of IP address</h1>

    @foreach ($servers as $server)
    <div>
        <ul>
            <li>id: {{ $server['id']}} </li>
            <li>URL: {{ $server['url'] }}</li>
            <li>Status: {{ $server['active'] }}</li>
        </ul>
    </div>
    @endforeach

<a href="{{ route('servers.create') }}"><button class="btn" type="submit">Add new IP Address</button></a>
@endsection