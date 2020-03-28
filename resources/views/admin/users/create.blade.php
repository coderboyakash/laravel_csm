@extends('layouts.master')
@section('content')
<div class="container">
<h1>Create User</h1>
    <div class="form w-75">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files' => true]) !!}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email Id') }}
            {{ Form::email('email', null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('role_id', 'Role') }}
            {{ Form::select('role_id', [''=>'Choose Option'] + $roles, null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('is_active', 'Status') }}
            {{ Form::select('is_active', array(1=>'Active', 0=>'Inactive'), 0, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class'=>'form-control']) }}
        </div>
          {{-- file input --}}
        <div class="form-group">
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
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
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