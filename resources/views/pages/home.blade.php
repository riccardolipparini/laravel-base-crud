@extends('layouts.main-layouts')
@section('content')
<ul>
   @foreach ($movies as $movie)
   <li>
       <b>
        
        <a href="{{ route('details', $movie -> id) }}">
            {{ $movie -> title}} 
        </a>
        - {{ $movie -> film_director}} 
        - {{$movie -> release_date}} 
        - {{ $movie -> duration}}min.</b>
   </li>
       
   @endforeach
</ul>
    
@endsection