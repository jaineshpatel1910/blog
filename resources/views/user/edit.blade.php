@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/user/{{$user->id}}" method="POST">
                        @csrf
                        <div class="switchery-demo">
                            <input type="checkbox" name="is_admin"  value="1" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" /> Make Admin
                        </div><br>
                        <input class="btn btn-success" type="submit" value="Submit">     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection