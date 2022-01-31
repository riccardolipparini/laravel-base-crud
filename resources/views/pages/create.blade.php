@extends('layouts.main-layouts')
@section('content')

<h1>hello world</h1>

<form action="{{ route('store')}}" method="POST">

    @method('POST')
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" placeholder="title">

    <label for="regista">Regista:</label>
    <input type="text" name="regista" placeholder="regista">

    <label for="release date">Data di rilascio:</label>
    <input type="date" name="data di rilascio"><br>

    <input type="button" value="Aggiungi" class="bottone">
</form>
    
@endsection