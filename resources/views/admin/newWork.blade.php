@extends('admin.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Add New Portfolio</h3>
                <br>

                @if(count($errors) > 0)
                  @foreach($errors->all() as $error)
                    <ul>
                      <li>{{$error}}</li>
                    </ul>
                  @endforeach
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ Session::get('success') }}
                    </div>
                @endif

                <form class="form-horizontal" action="{{route('addPortfolio')}}"  method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Title</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="portfolioTitle" value="{{old('portfolioTitle')}}">
                            <br>
                            @if($errors->has('portfolioTitle'))
                                <p class="text-danger">{{$errors->first('portfolioTitle')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Category</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="portfolioSubtitle" value="{{old('portfolioSubtitle')}}">
                            <br>
                            @if($errors->has('portfolioSubtitle'))
                                <p class="text-danger">{{$errors->first('portfolioSubtitle')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Website Link</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="portfolioSiteLink" value="{{old('portfolioSiteLink')}}">
                            <br>
                            @if($errors->has('portfolioSiteLink'))
                                <p class="text-danger">{{$errors->first('portfolioSiteLink')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">

                            <div class="white-box">
                                <h3 class="box-title">Image Upload</h3>
                                <input type="file" name="portfolioFile" class="dropify" />
                            </div>
                            @if($errors->has('portfolioFile'))
                                <p class="text-danger">{{$errors->first('portfolioFile')}}</p>
                            @endif
                        </div>
                    </div>
                    <button type="submit" name="add_portfolio" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>

                </form>

            </div>
        </div>
    </div>

@endsection
