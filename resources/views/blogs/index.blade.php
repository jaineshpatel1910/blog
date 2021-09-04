@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->body }}</td>
                            <td>{{ $blog->category }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href='/dashboard'> Click Here</a> to go back
        </div> 
    </div>
</div>
    
    

@endsection