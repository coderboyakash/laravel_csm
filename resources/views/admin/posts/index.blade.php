@extends('layouts.master')

@section('content')
<div class="container-fluid">
<table class="table table-hover table-responsive">
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Owner</th>
    <th scope="col">Category</th>
    <th scope="col">Photo</th>
    <th scope="col">Title</th>
    <th scope="col">Content</th>
    <th scope="col">Created</th>
    <th scope="col">Updated</th>
  </tr>
  @if ($posts)
    @foreach ($posts as $post)
    <tr class='clickable-row font-italic' data-href='{{ route('posts.edit', $post->id) }}'>
      <td>{{$post->id}}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->category ? $post->category->name : 'Uncatagorised'}}</td>
      <td><img class="rounded" style="width: 100px; height:75px;" src="{{ $post->photo ? $post->photo->file : "/images/icon.png" }}"></td>
      {{-- <td>{{$post->photo_id}}</td> --}}
      <td>{{$post->title}}</td>
      <td class="con justify">{{str_limit($post->body, 150)}}</td>
      <td>{{$post->created_at->diffForHumans()}}</td>
      <td>{{$post->updated_at->diffForHumans()}}</td>
    </tr>
    @endforeach
  @endif
  </table>
</div>
@endsection