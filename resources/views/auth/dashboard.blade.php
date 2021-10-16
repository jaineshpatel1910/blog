@extends('layouts.base')

@section('content')

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="header-title m-t-0 m-b-20">Dashboard</h3>
                            </div>
                        </div>

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="mdi mdi-book-multiple"></i> <b data-plugin="counterup">{{ $post->count() }}</b></h3>
												<p class="text-muted">Total blogs by admin</p>
											</div>
										</div>

										<div class="col-lg-4 col-sm-4">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="mdi mdi-border-color"></i> <b data-plugin="counterup">{{ $comment->count() }}</b></h3>
												<p class="text-muted">Total comments</p>
											</div>
										</div>

										<div class="col-lg-4 col-sm-4">
											<div class="widget-inline-box text-center b-0">
												<h3 class="m-t-10"><i class="mdi mdi-bookmark"></i> <b data-plugin="counterup">{{ $post->count() }}</b></h3>
												<p class="text-muted">Total blogs</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Recent Blogs</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Body</th>
                                                    <th>Created at</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($blog as $blog)
                                                    <tr>
                                                        <td>{{ $blog->title }}</td>
                                                        <td>{{ $blog->body }}</td>
                                                        <td>{{ $blog->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection