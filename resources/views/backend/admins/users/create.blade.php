@extends('layouts.app')
@section('content')

<form action="{{route('users.store')}}"  method="POST">
    @csrf
    @include('backend.admins.users.fields')
</form>


@endsection