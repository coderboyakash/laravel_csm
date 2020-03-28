@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <h1>Edit Posts</h1>

        <div class="row">
            <div class="col-sm-3">
                <img class="m-5" style="width: 275px; height:200px;" src="{{ $post->photo ? $post->photo->file : "/images/icon.png" }}">
            </div>
        <div class="col-sm-9">
                <div class="form pr-3">
                    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update',$post->id], 'files' => true]) !!}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('category_id', 'Category') }}
                        {{ Form::select('category_id', array(''=>'Choose Option') + $categories, null, ['class'=>'form-control']) }}
                    </div>
                    {{-- file input --}}
                    <div class="form-group">
                        {{-- {{ Form::label('', 'Upload Image') }} --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="fileinput">Upload</span>
                            </div>
                            <div class="custom-file">
                                {{ Form::file('photo_id', ['class'=>'custom-file-input', 'id'=>'file', 'aria-describedby'=>'fileinput']) }}
                                {{ Form::label('photo_id', 'Choose File', ['class'=>'custom-file-label']) }}
                            </div>
                        </div>
                    </div>
                    {{-- file input end --}}
                    <div class="form-group">
                        {{ Form::label('body', 'Content') }}
                        {{ Form::textarea('body', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{Form::submit('Update Post', ['class'=>'btn btn-primary w-25'])}}
                    </div>
                {!! Form::close() !!}
                {{-- delete form start --}}
                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$post->id],'files' => true]) !!}
                <div class="form-group">
                    {{Form::submit('Delete Post', ['class'=>'btn btn-danger w-25'])}}
                </div>
                {!! Form::close() !!}
                {{-- delete form end --}}
                </div>
                @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
        </div>
    </div>
@endsection