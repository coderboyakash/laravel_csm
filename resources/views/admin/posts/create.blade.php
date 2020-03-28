@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <h1>Create Posts</h1>
        <div class="form pr-3">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files' => true]) !!}
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
                {{Form::submit('Create Post', ['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
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
@endsection
