@extends('layouts.base')

@section('title','comic')

@section('content')
    <img src="{{$comic->thumb}}" alt="">
    <p><span class="ms_bold">Thumb:</span> {{$comic->thumb}}</p>
    <h1><span class="ms_bold">Title:</span> {{$comic->title}}</h1>
    <h2><span class="ms_bold">Series:</span> {{$comic->series}}</h2>
    <p><span class="ms_bold">Type:</span> {{$comic->type}}</p>
    <p><span class="ms_bold">Description:</span> {{$comic->description}}</p>
    <p><span class="ms_bold">Price:</span> {{$comic->price}} <span class="ms_bold">Sale Date:</span> {{$comic->sale_date}}</p>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
    <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">edit</button></a>
@endsection

<span class="ms_bold"></span>