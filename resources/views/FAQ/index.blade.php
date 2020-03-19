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
    <form action="{{ route('addFAQForm') }}" method="get">
        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Ajouter
        </button>
    </form>
    <table class="table-auto">
     <thead>
        <tr>
            <th class="px-4 py-2">Question</th>
            <th class="px-4 py-2">Réponse</th>
            <th class="px-4 py-2">Modifier</th>
            <th class="px-4 py-2">Supprimer</th>
        </tr>
     </thead>
     <tbody>
                    
    @foreach ($faqs as $faq)
        <tr>
            <td class="border px-4 py-2">{{ $faq->question }}</td>
            <td class="border px-4 py-2">{{ $faq->reponse }}</td>
            <td class="border px-4 py-2">
                <form action="{{route('updateFAQForm',['id'=>$faq->id])}}">
                <button class="bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Modifier
                </button>
                </form>
            </td>
            <td class="border px-4 py-2">
                <form action="{{route('deleteFAQ',['id'=>$faq->id])}}" method="post">
                @csrf
                <button class="bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" onclick="return confirm('Voulez-vous Vraiment le supprimer ?');">
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