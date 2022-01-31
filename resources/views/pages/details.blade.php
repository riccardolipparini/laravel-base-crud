@extends('layouts.main-layouts')
@section('content')

<h1>{{ $movie -> title}}</h1>
<p>
    {{ $movie -> film_director}}
</p>
    
@endsection