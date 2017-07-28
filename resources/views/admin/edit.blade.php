@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Add New Post</h3>
                <br>

                {!! Form::model($post, ['route' => ['updatePost', $post->id], 'method' => 'POST']) !!}

                    <div class="form-group">
                        <label class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title" value="{{$post->title}}">
                            <br>
                            @if($errors->has('title'))
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Content</label>
                        <div class="col-sm-12">
                            <textarea class="textarea_editor form-control" rows="15" name="content">{{$post->content}}</textarea>
                            <br>
                            @if($errors->has('content'))
                                <p class="text-danger">{{$errors->first('content')}}</p>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
