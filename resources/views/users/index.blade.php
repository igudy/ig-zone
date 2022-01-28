@extends('layouts.main')

@section('content')
    <h2>DASHBOARD</h2>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('users.create')}}">Create User</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>E-mail</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($users as $user)
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
