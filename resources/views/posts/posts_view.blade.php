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
                        <th>Created at</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->category }}</td>
                            <td>{{ $post->created_at }}</td> 
                            <td>
                                <a href="posts/{{$post->id}}" class="btn btn-primary">Show</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection