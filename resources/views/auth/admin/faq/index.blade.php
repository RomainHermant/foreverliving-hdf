@extends('auth.admin.layouts.app')

@section('content')

    <div class="mx-auto">
        <form action="{{ route('create.faq') }}" method="get">
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
                        <form action="{{route('updateForm.faq',['id'=>$faq->id])}}">
                            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Modifier
                            </button>
                        </form>
                    </td>
                    <td class="border px-4 py-2">
                        <form action="{{route('delete.faq',['id'=>$faq->id])}}" method="post">
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
@endsection
