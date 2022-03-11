@extends('layouts.base')

@section('title', 'comics list')


@section('content')

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">thumb</th>
        <th scope="col">price</th>
        <th scope="col">series</th>
        <th scope="col">sale date</th>
        <th scope="col">type</th>
        <th scope="col"><a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">create</button></a></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td scope="row">{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td><img src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td><a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-primary">show</button></a></td>
            <td><a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="btn btn-warning">edit</button></a></td>
        </tr>
        @endforeach
    
    </tbody>
</table>
    
@endsection