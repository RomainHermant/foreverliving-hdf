@extends('auth.admin.layouts.app')

@section('content')
    <div class="mx-auto">
        <a href="{{ route('createForm.products') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Ajouter
        </a>
        <table class="table-auto">
            <thead>
            <tr>
                <th class="px-4 py-2">Nom du Produit</th>
                <th class="px-4 py-2">Poids</th>
                <th class="px-4 py-2">Prix</th>
                <th class="px-4 py-2">Référence</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Modifier</th>
                <th class="px-4 py-2">Supprimer</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($produits as $produit)
                <tr>
                    <td class="border px-4 py-2">{{ $produit->name }}</td>
                    <td class="border px-4 py-2">{{ $produit->weight }}</td>
                    <td class="border px-4 py-2">{{ $produit->price }}</td>
                    <td class="border px-4 py-2">{{ $produit->reference }}</td>
                    <td class="border px-4 py-2">
                        <img src="/produitImages/{{ $produit->image }}" width="50px" height="50px" alt="Pas d'image dispponible">
                    </td>
                    <td class="border px-4 py-2">
                        <form action="{{route('updateForm.products',['id'=>$produit->id])}}">
                            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Modifier
                            </button>
                        </form>
                    </td>
                    <td class="border px-4 py-2">
                        <form action="{{route('delete.products',['id'=>$produit->id])}}" method="post">
                            @csrf
                            <button class="bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" onclick="return confirm('Voulez-vous Vraiment supprimer ce products ?');">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
