@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="header-title m-t-0 m-b-20"> Admin Dashboard</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box widget-inline">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-inline-box text-center">
                            <h3 class="m-t-10"><i class="mdi mdi-book-multiple"></i> 
                                <b data-plugin="counterup">{{ $post->count() }}</b>
                            </h3>
                            <p class="text-muted">Total blogs by admin</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-inline-box text-center">
                            <h3 class="m-t-10"><i class="mdi mdi-border-color"></i>
                                <b data-plugin="counterup">{{ $comment->count() }}</b>
                            </h3>
                            <p class="text-muted">Total comments</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-inline-box text-center">
                            <h3 class="m-t-10"><i class="mdi mdi-account-multiple"></i> <b
                                    data-plugin="counterup">{{ $user->count() }}</b></h3>
                            <p class="text-muted">Total users</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="widget-inline-box text-center b-0">
                            <h3 class="m-t-10"><i class="mdi mdi-bookmark"></i> <b
                                    data-plugin="counterup">{{ $post->count() }}</b></h3>
                            <p class="text-muted">Total blogs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row -->


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0">Recent Blogs</h4>
                <div class="table-responsive" id="table_data">
                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $blogs->appends(Request::all())->links() !!}
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0">Users</h4>
                <div class="table-responsive" id="table_data">
                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Is admin</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ ($user->is_admin)?'Yes':'No' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $users->appends(Request::all())->links() !!}
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0">Blogs</h4>
                <div class="table-responsive" id="table_data">
                    <table class="table table-hover mails m-0 table table-actions-bar">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Created at</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $posts->appends(Request::all())->links() !!}
            </div>
        </div>
    </div>

</div>
<!-- end container -->
@endsection