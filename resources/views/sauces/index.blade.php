@extends('layouts.app')

@section('content')
    <h1>Liste des sauces</h1>
    <a href="{{ route('sauces.create') }}">Ajouter une sauce</a>
    <ul>
        @foreach ($sauces as $sauce)
            <li>
                <a href="{{ route('sauces.show', $sauce->id) }}">{{ $sauce->name }}</a>
                <a href="{{ route('sauces.edit', $sauce->id) }}">✏️</a>
                <form action="{{ route('sauces.destroy', $sauce->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">🗑️</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection