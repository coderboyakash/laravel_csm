@extends('layouts.master')
@section('content')
<div class="container">
   @if (Session::has('deleted_user'))
   <p class="alert alert-danger">{{ session('deleted_user') }}</p>
   @endif
   <h1>Users</h1>
   <table class="table table-hover table-responsive font-italic">
      <tr>
         <th scope="col">Id</th>
         <th scope="col">Photos</th>
         <th scope="col">Name</th>
         <th scope="col">Role</th>
         <th scope="col">Status</th>
         <th scope="col">Email Id</th>
         <th scope="col">Created at</th>
         <th scope="col">Updated at</th>
      </tr>
      @foreach ($users as $user)
      <tr class='clickable-row font-italic' data-href='{{ route('users.edit', $user->id) }}'>
      <td>{{$user->id}}</td>
      <td><img style="width: 50px; height:50px;" class="rounded-circle" src="{{ $user->photo ? $user->photo->file : "/images/icon.png" }}"></td>
      <td> <a class="text-decoration-none" href="{{ route('users.edit', $user->id) }}">{{$user->name}}</a> </td>
      <td>{{ $user->role->name ? $user->role->name : "Not Assigned" }}</td>
      <td>{{ $user->is_active ? "Active" : "Inactive" }}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>
      @endforeach
   </table>
</div>
@endsection