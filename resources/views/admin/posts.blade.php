@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">

                <h3 class="box-title">Manage Posts</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Date Posted</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)

                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->category}}</td>
                                <td>{{substr($post->content, 0, 50)}}</td>
                                <td><img src="<?php echo 'posts/'.$post['images']; ?>" class="post_img"></td>
                                <td>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</td>
                                <td class="text-nowrap">
                                  
                                    <a href="{{ route('editPost',[$post->id]) }}" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fa fa-close text-danger"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>

                <p>{!! $posts->links() !!}</p>

            </div>
        </div>
    </div>

@endsection
