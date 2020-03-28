@extends('layouts.master')
@section('content')
<div class="container">
   <h1>Medias</h1>
   <table class="table table-hover table-responsive font-italic">
      <tr>
         <th scope="col">Id</th>
         <th scope="col">Name</th>
         <th scope="col">Created at</th>
         <th scope="col">Updated at</th>
      </tr>
      @foreach ($photos as $photo)
      <tr>
         <td>{{$photo->id}}</td>
         <td><img class="rounded" style="width: 200px; height:150px;" src="{{$photo->file}}"></td>
         <td>{{$photo->created_at->diffForHumans()}}</td>
         <td>{{$photo->updated_at->diffForHumans()}}</td>
         <td>
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@update',$photo->id], 'files' => true]) !!}
               <div class="form-group">
                     {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
               </div>
            {!! Form::close() !!}
            
         </td>
      </tr>
      @endforeach
   </table>
</div>
@endsection