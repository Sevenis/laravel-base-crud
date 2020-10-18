@extends('layouts/app')
@section('content')
    @foreach ($data as $item)
        <ul>
            <li>{{$item->nomeprodotto}}</li>
            <li>{{$item->categoria}}</li>
            <li>{{$item->prezzoacquisto}}</li>
            <li>{{$item->prezzovendita}}</li>
            <li>{{$item->disponibile}}</li>
            <li>{{$item->description}}</li>
        </ul>
    @endforeach
@endsection
