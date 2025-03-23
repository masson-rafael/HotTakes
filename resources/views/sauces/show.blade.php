@extends('layouts.app')

@section('content')
    <h1>{{ $sauce->name }}</h1>
    <p>Fabricant : {{ $sauce->manufacturer }}</p>
    <p>Description : {{ $sauce->description }}</p>
    <p>Ingrédient principal : {{ $sauce->mainPepper }}</p>
    <img src="{{ $sauce->imageUrl }}" alt="{{ $sauce->name }}" width="200">
    <p>Force : {{ $sauce->heat }}/10</p>
    <p>👍 {{ $sauce->likes }} | 👎 {{ $sauce->dislikes }}</p>
    <a href="{{ route('sauces.edit', $sauce->id) }}">Modifier</a>
    <form action="{{ route('sauces.destroy', $sauce->id) }}" method="POST">
        @csrf @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endsection