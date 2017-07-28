@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Add New Post</h3>
                <br>

                {!! Form::model($post, ['route' => ['updatePortfolio', $post->id], 'method' => 'POST']) !!}

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
                        <label class="col-md-12">Category</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subtitle" value="{{$post->subtitle}}">
                            <br>
                            @if($errors->has('subtitle'))
                                <p class="text-danger">{{$errors->first('subtitle')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Website Link</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="site_link" value="{{$post->site_link}}">
                            <br>
                            @if($errors->has('site_link'))
                                <p class="text-danger">{{$errors->first('site_link')}}</p>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection
