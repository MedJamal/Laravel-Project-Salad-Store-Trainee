@extends('admin.layouts.default')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    {{ $user->is_admin ? 'Administrator' : 'Normal user' }}
                </td>
                <td>
                    @if ($user->is_admin)
                        <button type="button" onclick="location.href='{{ route('admin.user.setRole', [$user->id]) }}'" class="btn-block btn btn-sm btn-secondary">Remove administrator role</button>
                    @else
                        <button type="button" onclick="location.href='{{ route('admin.user.setRole', [$user->id]) }}'" class="btn-block btn btn-sm btn-primary">Give administrator role</button>
                    @endif
                </td>
            </tr>    
        @endforeach
    </tbody>
</table>

@endsection
