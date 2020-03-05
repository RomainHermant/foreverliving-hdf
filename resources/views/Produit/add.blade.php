@extends('layouts.app')

@section('content')
    <form action="{{ route('addProduct') }}" method="POST">

        @csrf

        <label for="name">Nom du produit : </label>
        <input type="text" name="name" id="name" />

        <label for="category">Category : </label>
        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->desc }}</option>
            @endforeach
        </select>

        <label for="description">Description : </label>
        <textarea name="description" id="description" rows=6></textarea>

        <label for="weight">Poids : </label>
        <input type="text" name="weight" id="weight" />

        <label for="price">Prix : </label>
        <input type="text" name="price" id="price" />

        <label for="reference">Référence : </label>
        <input type="text" name="reference" id="reference" />

        <label for="image">Référence : </label>
        <input type="file" name="image" id="image" />

        <input type="submit" value="Ajouter">

    </form>
</div>
@endsection