@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Add New Post</h3>
                <br>

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ Session::get('success') }}
                    </div>
                @endif

                <form class="form-horizontal" action="{{route('storePost')}}"  method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                            <br>
                            @if($errors->has('title'))
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Category</label>
                        <div class="col-sm-12">
                            <select class="custom-select col-12" id="inlineFormCustomSelect" name="category">
                                <option selected>Choose...</option>
                                <option value="Tips">Tips & Tricks</option>
                                <option value="Tutorials">Tutorials</option>
                                <option value="News">News</option>
                            </select>
                            <br>
                            @if($errors->has('category'))
                                <p class="text-danger">{{$errors->first('category')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">

                            <div class="white-box">
                                <h3 class="box-title">Image Upload</h3>
                                <input type="file" name="fileInput" class="dropify" />
                            </div>
                            @if($errors->has('fileInput'))
                                <p class="text-danger">{{$errors->first('fileInput')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Content</label>
                        <div class="col-sm-12">
                            <textarea class="textarea_editor form-control" rows="15" name="content"></textarea>
                            <br>
                            @if($errors->has('content'))
                                <p class="text-danger">{{$errors->first('content')}}</p>
                            @endif
                        </div>
                    </div>

                    <button type="submit" name="add_post" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
