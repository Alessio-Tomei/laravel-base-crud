@extends('layouts.base')

@section('title','edit comic')

@section('content')
    <h1>Edita fumetto: {{$comic->title}}</h1>  

    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto" value="{{old('title') ?? $comic->title}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">{{old('description') ?? $comic->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la thumb fumetto" value="{{old('thumb') ?? $comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step=".01" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto" value="{{old('price') ?? $comic->price}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la series del fumetto" value="{{old('series') ?? $comic->series}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data del fumetto" value="{{old('sale_date') ?? $comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo del fumetto" value="{{old('type') ?? $comic->type}}">
        </div>
        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
        <button type="submit" class="btn btn-success">save</button>
    </form>
    <form id="ms_delete-btn" action="{{route("comics.destroy", $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo fumetto?');">delete</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection