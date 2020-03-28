@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css">
@endsection
@section('content')
    <div class="container-fluid">
        <h1>Upload Media</h1>
        <div class="form pr-3">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminMediasController@store', 'files' => true, 'class'=>'dropzone']) !!}
            {{-- dropzone --}}
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
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js" ></script>
@endsection
@endsection



