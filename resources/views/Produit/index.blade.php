@include('components.nav')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forever Living HDF</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

    <div  class="min-h-screen bg-gray-200">
    <div class="flex flex-wrap w-auto pt-40">

    <div class="mx-auto">
    <form action="{{ route('addProduitForm') }}" method="get">
        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Ajouter
        </button>
    </form>
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
                <form action="{{route('updateProduitForm',['id'=>$produit->id])}}">
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Modifier
                </button>
                </form>
            </td>
            <td class="border px-4 py-2">
                <form action="{{route('deleteProduit',['id'=>$produit->id])}}" method="post">
                @csrf
                <button class="bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" onclick="return confirm('Voulez-vous Vraiment supprimer ce Produit ?');">
                    Supprimer
                </button>
                </form>
            </td>
        </tr>
    @endforeach
     </tbody>
    </table>
    </div>
</div>
</div>
</body>
</html>