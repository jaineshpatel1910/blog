@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <br>
            <h3>Users</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Is admin</th>
                        <th>Is superadmin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ ($user->is_admin)?'Yes':'No' }}</td>
                            <td>{{ ($user->is_superadmin)?'Yes':'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div> 
    </div>
</div>

@endsection