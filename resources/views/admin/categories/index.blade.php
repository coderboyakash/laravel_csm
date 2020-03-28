@extends('layouts.master')

@section('content')
    <div class="conatainer-fluid">
        <div class="row">
            <div class="col-sm-5">
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
            </div>
            <div class="col-sm-6">
                <h1>Categories</h1>
                <table class="table table-hover table-responsive">
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Category</th>
                      <th scope="col">Created</th>
                      <th scope="col">Updated</th>
                    </tr>
                    @if ($categories)
                      @foreach ($categories as $category)
                      <tr class='clickable-row font-italic' data-href='{{ route('categories.edit', $category->id) }}'>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>
                      </tr>
                      @endforeach
                    @endif
                    </table>
            </div>
        </div>
    </div>
@endsection