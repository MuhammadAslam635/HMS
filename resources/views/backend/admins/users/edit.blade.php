@extends('layouts.app')
@section('content')

<form action="{{route('users.store')}}" method="post">
    <input type="hidden" name="edit_id" id="edit_id" value="{{$user->id}}">
    @csrf
    @include('backend.admins.users.fields')
</form>

@endsection