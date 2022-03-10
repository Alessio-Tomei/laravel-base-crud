@extends('layouts.base')

@section('title','new comic')

@section('content')
    <h1>Crea fumetto</h1>  

    <form action="{{route("comics.store")}}" method="POST">
        
        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la thumb fumetto">
        </div>
        <div class="form-group">
            <label for="price">Tempo di cottura</label>
            <input type="number" step=".01" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la series del fumetto">
        </div>
        <div class="form-group">
            <label for="sale_date">Data</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data del fumetto">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo del fumetto">
        </div>
        <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
        <button type="submit" class="btn btn-success">add</button>
    </form>
@endsection