@extends('layouts.main-layouts')
@section('content')

<a href="{{ route('create')}}"><h4>Aggiungi nuovo film</h4></a>



<ul>
    
   @foreach ($movies as $movie)
   <li>
       
        
        <a href="{{ route('details', $movie -> id) }}">
            {{ $movie -> title}} 
        </a>
        - {{ $movie -> film_director}} 
        - {{$movie -> release_date}} 
        - {{ $movie -> duration}}min.
   </li>
       
   @endforeach
</ul>
    
@endsection