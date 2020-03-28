@extends('layouts.master')

@section('content')
    <h1>Create Categories</h1>
                <div class="form pr-3">
                    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Category') }}
                        {{ Form::text('name', null, ['class'=>'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{Form::submit('Create Category', ['class'=>'btn btn-primary'])}}
                    </div>
                {!! Form::close() !!}
                </div>
@endsection