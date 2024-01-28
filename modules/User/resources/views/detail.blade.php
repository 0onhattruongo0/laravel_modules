@extends('layout')
@section('title')
{{__('user::custom.title',['name' => 'Hello'])}}
@endsection
@section('content')
{{__('user::custom.title',['name' => 'Hello'])}} : {{$id}}
@endsection