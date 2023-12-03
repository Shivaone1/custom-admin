@extends('layout.app')

@section('container')


<h1 class="text-center">Home : {{ Auth::user()->name }}</h1>


@endsection