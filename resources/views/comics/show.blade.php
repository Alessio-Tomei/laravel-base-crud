@extends('layouts.base')

@section('title','comic')

@section('content')
    <img src="{{$comic->thumb}}" alt="">
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->series}}</h2>
    <p>{{$comic->type}}</p>
    <p>{{$comic->description}}</p>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
    <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">edit</button></a>
@endsection