@extends('layouts.app')
@section('banner-content')

    <h3>Add Series</h3>

@endsection
@section("content")
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Create a Series

                                <div id="app">
                                    <vue-lesson default_lessons="{{$series->lesson}}"></vue-lesson>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('series.update',$series->slug)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @method('PUT')
                                <div class="form-group">
                                    <label>Name:</label><br>
                                    <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" value="{{$series->title}}">
                                    @error('title')
                                    <span class="invalid-feedback text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description:</label><br>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') @enderror">{{$series->description}}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Image:</label><br>
                                    <input type="file" name="image" class="@error('image') @enderror">


                                    @error('image')
                                    <span class="invalid-feedback text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{ asset($series->image) }}" alt="{{$series->title}}" class="@error('image') @enderror" height="150px" width="150px"><br>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="UPDATE" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
