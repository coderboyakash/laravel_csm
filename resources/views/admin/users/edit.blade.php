@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit User</h1>
    <div class="row">
        <div class="col-sm-2">
            <img class="rounded imgedit ml-2" src="{{ $user->photo ? $user->photo->file : "" }}">
        </div>
        <div class="col-sm-10">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files' => true]) !!}
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
                {{ Form::select('role_id', $roles, null, ['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('is_active', 'Status') }}
                {!! Form::select('is_active', array(1 => 'Active', 0=> 'Inactive'), null , ['class'=>'form-control'])!!}
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
                {{Form::submit('Update User', ['class'=>'btn btn-primary w-25'])}}
            </div>
        {!! Form::close() !!}
        {{-- delete form start --}}
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy',$user->id],'files' => true]) !!}
        <div class="form-group">
            {{Form::submit('Delete User', ['class'=>'btn btn-danger w-25'])}}
        </div>
        {!! Form::close() !!}
        {{-- delete form end --}}
        </div>
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