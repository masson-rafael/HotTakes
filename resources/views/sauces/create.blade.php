@extends('layouts.app')

@section('content')
    <h1>Ajouter une sauce</h1>
    <form action="{{ route('sauces.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nom" required>
        <input type="text" name="manufacturer" placeholder="Fabricant" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="text" name="mainPepper" placeholder="Ingrédient principal" required>
        <input type="url" name="imageUrl" placeholder="URL de l'image" required>
        <input type="number" name="heat" placeholder="Force (1-10)" min="1" max="10" required>
        <button type="submit">Ajouter</button>
    </form>
@endsection
