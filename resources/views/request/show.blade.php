@extends('layouts.base')

@section('content')
                    <div class="container">
                        <div class="row">
                            <h3 class="header-title m-t-0 m-b-20">Requests</h3>
                        </div>

                        <div class="row">
                            @foreach ($form as $form)
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Type of Blog</th>
                                                    <th>Experience</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                    <tr>
                                                        <td>{{ $form->id }}</td>
                                                        <td>{{ $form->name }}</td>
                                                        <td>{{ $form->type_of_blog }}</td> 
                                                        <td>{{ $form->experience }}</td>
                                                        <td>
                                                            <form action="/makeblogger/{{ $form->id }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="is_admin" value="1" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                                                <button type="submit" class="btn btn-success btn-bordered">Accept</button>
                                                            </form>
                                                            <br>
                                                            <form action="/makeblogger/{{ $form->id }}/update" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="status" value="0" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                                                <button type="submit" class="btn btn-danger btn-bordered">Reject</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                 
                    @endsection