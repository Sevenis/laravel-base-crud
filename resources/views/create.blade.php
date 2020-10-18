@extends('layouts/app')
@section('content')
    <form action="{{route('items.store')}}" method="post">
        @csrf
        @method('POST')
        <label for="title">Nome Prodotto</label>
            <input type="text" name="name" value="{{old('name')}}" placeholder="Nome del prodotto">
        <label for="content">Categoria</label>
            <input type="text" name="categoria" value="{{old('categoria')}}" placeholder="Categoria">
        <label for="content">Prezzo Acquisto</label>
            <input type="text" name="prezzoacquisto" value="{{old('prezzoacquisto')}}" placeholder="Prezzo d'acquisto">
        <label for="content">Prezzo Vendita</label>
            <input type="text" name="prezzovendita" value="{{old('prezzovendita')}}" placeholder="Prezzo di vendita">
        <label for="content">Disponibilità</label>
            <input type="text" name="disp" value="{{old('disp')}}" placeholder="Prodotto disponibile?">
        <label for="content">Descrizione prodotto</label>
            <input type="text" name="desc" value="{{old('desc')}}" placeholder="Descrizione del prodotto">
        <input type="submit" value="Invia">
    </form>
@endsection
