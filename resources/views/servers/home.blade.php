@extends('layout')

@section('title', 'Server list')

@section('content')
<h1>List of IP address</h1>

    <table>
    <tr>
        <th>ID</th>
        <th>URL</th>
        <th>Status</th>
    </tr>
    @foreach ($servers as $server)
    <div>
        <tr>
            <td>{{ $server['id']}}</td>
            <td>{{ $server['url'] }}</td>
            <td>{{ $server['active'] }}</td>
        </tr>
    </div>
    @endforeach
    </table>

    <br>
<a href="{{ route('servers.create') }}"><button class="btn" type="submit">Add new IP Address</button></a>
<!-- <a href="{{ route('servers.update') }}"><button class="btn" type="submit">ping</button></a> -->




@endsection

